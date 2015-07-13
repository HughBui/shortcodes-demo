<?php

function generate_art_nounce(){
  $nouce = wp_create_nonce( plugin_basename(__FILE__) );
  echo <<<HTML
    <input type="hidden" name="art_meta_noncename" id="art_meta_noncename" value="{$nouce}" />
HTML;
}

function add_article_metaboxes(){
  add_meta_box('jdlc_article_image', 'Image', 'jdlc_article_image', 'post', 'normal', 'high');
  add_meta_box('jdlc_article_image2', 'Image', 'jdlc_article_image2', 'post', 'normal', 'high');
  add_meta_box('jdlc_article_image3', 'Image', 'jdlc_article_image3', 'post', 'normal', 'high');
}

function jdlc_article_image() {
  global $post;
  generate_art_nounce();

  $image = get_post_meta($post->ID, 'image', true);
  echo <<<HTML
    <input type="text" name="jdlc_article_image" value="{$image}" class="widefat" />
HTML;
}

function jdlc_article_image2() {
  global $post;
  generate_art_nounce();

  $image = get_post_meta($post->ID, 'image2', true);
  echo <<<HTML
    <input type="text" name="jdlc_article_image2" value="{$image}" class="widefat" />
HTML;
}

function jdlc_article_image3() {
  global $post;
  generate_art_nounce();

  $image = get_post_meta($post->ID, 'image3', true);
  echo <<<HTML
    <input type="text" name="jdlc_article_image3" value="{$image}" class="widefat" />
HTML;
}

function jdlc_save_article_meta($post_id, $post){
  if(!wp_verify_nonce( $_POST['art_meta_noncename'], plugin_basename(__FILE__)))
    return $post->ID;
  if ( !current_user_can( 'edit_post', $post->ID ))
    return $post->ID;

  // add params
  $instrument_params['image'] = $_POST['jdlc_article_image'];
  $instrument_params['image2'] = $_POST['jdlc_article_image2'];
  $instrument_params['image3'] = $_POST['jdlc_article_image3'];
  // save params
  foreach ($instrument_params as $key => $value) {
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

add_action( 'add_meta_boxes', 'add_article_metaboxes');
add_action('save_post', 'jdlc_save_article_meta', 2, 2);

?>
