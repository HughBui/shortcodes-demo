<?php

function wptutsplus_register_theme_menu() {
    register_nav_menu( 'footer', 'Footer Navigation Menu' );
}
add_action( 'init', 'wptutsplus_register_theme_menu' );

function parse_shortcode_content( $content ) {
  $content = trim( wpautop( do_shortcode( $content ) ) );
  if ( substr( $content, 0, 4 ) == '</p>' )
      $content = substr( $content, 4 );

  if ( substr( $content, -3, 3 ) == '<p>' )
      $content = substr( $content, 0, -3 );

  $content = str_replace( array( '<p></p>' ), '', $content );
  $content = str_replace( array( '<br></br>' ), '', $content );

  return $content;
}

/* includes */
include_once('includes/article-functions.php');
include_once('includes/home-functions.php');
include_once('includes/contact-functions.php');
include_once('includes/facilities-functions.php');
include_once('includes/research-functions.php');
include_once('includes/lightbox-functions.php');
include_once('includes/instruments-functions.php');
/* Functions */

function get_static_uri($resource){
  return get_template_directory_uri() . '/static/' . $resource;
}

function jdlc_gradient_css($colourA, $colourB, $image) {
  return "background: linear-gradient(".$colourA.", ".$colourB."),url(".$image."); background-size: cover; background-position: center;";
}

add_action('init', 'get_static_uri');

/* Custom Post Types */
include_once('includes/publication_post_type.php');
include_once('includes/instrument_post_type.php');
include_once('includes/article_post_type.php');
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function wpse_wpautop_nobr( $content ) {
    return wpautop( $content, false );
}

add_theme_support('post-thumbnails');

?>
