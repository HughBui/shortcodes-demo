<?php

function create_reference_post_type() {
  register_post_type( 'publication',
    array(
      'labels' => array(
        'name' => __( 'Publications' ),
        'singular_name' => __( 'Publication' )
      ),
      'public' => false,
      'has_archive' => false,
      'publicly_queriable' => true,
      'show_ui' => true,
      'exclude_from_search' => true,
      'show_in_nav_menus' => false,
      'rewrite' => false,
      'supports' => array('title', 'custom_fields'),
      'register_meta_box_cb' => 'add_publication_metaboxes',
  ));
}

function add_publication_metaboxes(){
  add_meta_box('jdlc_pub_authors', 'Authors', 'jdlc_pub_authors', 'publication', 'normal', 'high');
  add_meta_box('jdlc_pub_year', 'Publication Year', 'jdlc_pub_year', 'publication', 'normal', 'high');
  add_meta_box('jdlc_pub_title', 'Title', 'jdlc_pub_title', 'publication', 'normal', 'high');
  add_meta_box('jdlc_pub_journal', 'Journal', 'jdlc_pub_journal', 'publication', 'normal', 'high');
}

// helper to generate nouce for security
function generate_nounce(){
  $nouce = wp_create_nonce( plugin_basename(__FILE__) );
  echo <<<HTML
    <input type="hidden" name="pub_meta_noncename" id="pub_meta_noncename" value="{$nouce}" />
HTML;
}

function jdlc_pub_authors(){
  global $post;
  generate_nounce();

  $author = get_post_meta($post->ID, 'authors', true);
  echo <<<HTML
    <input type="text" name="jdlc_pub_authors" value="{$author}" class="widefat" />
HTML;
}

function jdlc_pub_year(){
  global $post;
  generate_nounce();

  $year = get_post_meta($post->ID, 'year', true);
  echo <<<HTML
    <input type="text" name="jdlc_pub_year" value="{$year}" class="widefat" />
HTML;
}

function jdlc_pub_title(){
  global $post;
  generate_nounce();

  $title = get_post_meta($post->ID, 'title', true);
  echo <<<HTML
    <input type="text" name="jdlc_pub_title" value="{$title}" class="widefat" />
HTML;
}

function jdlc_pub_journal(){
  global $post;
  generate_nounce();

  $journal = get_post_meta($post->ID, 'journal', true);
  echo <<<HTML
    <input type="text" name="jdlc_pub_journal" value="{$journal}" class="widefat" />
HTML;
}

function jdlc_save_publication_meta($post_id, $post){
  if(!wp_verify_nonce( $_POST['pub_meta_noncename'], plugin_basename(__FILE__)))
    return $post->ID;
  if ( !current_user_can( 'edit_post', $post->ID ))
    return $post->ID;

  // add params
  $publication_params['authors'] = $_POST['jdlc_pub_authors'];
  $publication_params['year'] = $_POST['jdlc_pub_year'];
  $publication_params['title'] = $_POST['jdlc_pub_title'];
  $publication_params['journal'] = $_POST['jdlc_pub_journal'];
  // save params
  foreach ($publication_params as $key => $value) {
    // don't store twice
    if( $post->post_type == 'revision' ) return;
    if(get_post_meta($post->ID, $key, false)) {
      // update existing
      update_post_meta($post->ID, $key, $value);
    } else {
      // add new
      add_post_meta($post->ID, $key, $value);
    }
    if(!$value)
      // delete empty
      delete_post_meta($post->ID, $key);
  }
}

function jdlc_generate_html_id() {
  return 'jdlc' . substr( md5(rand()), 0, 7);
}

add_action( 'init', 'create_reference_post_type' );
add_action( 'add_meta_boxes', 'add_publication_metaboxes');
add_action('save_post', 'jdlc_save_publication_meta', 1, 2);

?>
