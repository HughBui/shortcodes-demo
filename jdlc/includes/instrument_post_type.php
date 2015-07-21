<?php

function create_instrument_post_type() {
  register_post_type( 'instrument',
    array(
      'labels' => array(
        'name' => __( 'Instruments' ),
        'singular_name' => __( 'Instrument' )
      ),
      'public' => false,
      'has_archive' => false,
      'publicly_queriable' => true,
      'show_ui' => true,
      'exclude_from_search' => true,
      'show_in_nav_menus' => false,
      'rewrite' => false,
      'supports' => array('title', 'custom_fields'),
      'register_meta_box_cb' => 'add_instrument_metaboxes',
  ));
}

function generate_inst_nounce(){
  $nouce = wp_create_nonce( plugin_basename(__FILE__) );
  echo <<<HTML
    <input type="hidden" name="inst_meta_noncename" id="inst_meta_noncename" value="{$nouce}" />
HTML;
}

function add_instrument_metaboxes(){
  add_meta_box('jdlc_instrument_facility', 'Facility', 'jdlc_instrument_facility', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_year', 'Year', 'jdlc_instrument_year', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_title', 'Title', 'jdlc_instrument_title', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_subtitle', 'Subtitle', 'jdlc_instrument_subtitle', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_model', 'Model', 'jdlc_instrument_model', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_manufacturer', 'Manufacturer', 'jdlc_instrument_manufacturer', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_room', 'Room', 'jdlc_instrument_room', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_building', 'Building', 'jdlc_instrument_building', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_description', 'Description', 'jdlc_instrument_description', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_image', 'Image', 'jdlc_instrument_image', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_image2', 'Image', 'jdlc_instrument_image2', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_image3', 'Image', 'jdlc_instrument_image3', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_link_label', 'Link Label', 'jdlc_instrument_link_label', 'instrument', 'normal', 'high');
  add_meta_box('jdlc_instrument_link_url', 'Link URL', 'jdlc_instrument_link_url', 'instrument', 'normal', 'high');
}

function jdlc_instrument_facility(){
  global $post;
  generate_inst_nounce();

  $facility = get_post_meta($post->ID, 'facility', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_facility" value="{$facility}" class="widefat" />
HTML;
}

function jdlc_instrument_year(){
  global $post;
  generate_inst_nounce();

  $year = get_post_meta($post->ID, 'year', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_year" value="{$year}" class="widefat" />
HTML;
}

function jdlc_instrument_title(){
  global $post;
  generate_inst_nounce();

  $title = get_post_meta($post->ID, 'title', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_title" value="{$title}" class="widefat" />
HTML;
}

function jdlc_instrument_subtitle(){
  global $post;
  generate_inst_nounce();

  $subtitle = get_post_meta($post->ID, 'subtitle', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_subtitle" value="{$subtitle}" class="widefat" />
HTML;
}

function jdlc_instrument_model(){
  global $post;
  generate_inst_nounce();

  $model = get_post_meta($post->ID, 'model', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_model" value="{$model}" class="widefat" />
HTML;
}

function jdlc_instrument_manufacturer(){
  global $post;
  generate_inst_nounce();

  $manufacturer = get_post_meta($post->ID, 'manufacturer', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_manufacturer" value="{$manufacturer}" class="widefat" />
HTML;
}

function jdlc_instrument_room(){
  global $post;
  generate_inst_nounce();

  $room = get_post_meta($post->ID, 'room', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_room" value="{$room}" class="widefat" />
HTML;
}

function jdlc_instrument_building(){
  global $post;
  generate_inst_nounce();

  $building = get_post_meta($post->ID, 'building', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_building" value="{$building}" class="widefat" />
HTML;
}

function jdlc_instrument_description(){
  global $post;
  generate_inst_nounce();

  $description = get_post_meta($post->ID, 'description', true);
  echo <<<HTML
    <textarea name="jdlc_instrument_description" value="{$description}" class="widefat">{$description}</textarea>
HTML;
}

function jdlc_instrument_image() {
  global $post;
  generate_inst_nounce();

  $image = get_post_meta($post->ID, 'image', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_image" value="{$image}" class="widefat" />
HTML;
}

function jdlc_instrument_image2() {
  global $post;
  generate_inst_nounce();

  $image = get_post_meta($post->ID, 'image2', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_image2" value="{$image}" class="widefat" />
HTML;
}

function jdlc_instrument_image3() {
  global $post;
  generate_inst_nounce();

  $image = get_post_meta($post->ID, 'image3', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_image3" value="{$image}" class="widefat" />
HTML;
}

function jdlc_instrument_link_label() {
  global $post;
  generate_inst_nounce();

  $label = get_post_meta($post->ID, 'link_label', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_link_label" value="{$label}" class="widefat" />
HTML;
}

function jdlc_instrument_link_url() {
  global $post;
  generate_inst_nounce();

  $url = get_post_meta($post->ID, 'link_url', true);
  echo <<<HTML
    <input type="text" name="jdlc_instrument_link_url" value="{$url}" class="widefat" />
HTML;
}

function jdlc_save_instrument_meta($post_id, $post){
  if(!wp_verify_nonce( $_POST['inst_meta_noncename'], plugin_basename(__FILE__)))
    return $post->ID;
  if ( !current_user_can( 'edit_post', $post->ID ))
    return $post->ID;

  // add params
  $instrument_params['facility'] = $_POST['jdlc_instrument_facility'];
  $instrument_params['year'] = $_POST['jdlc_instrument_year'];
  $instrument_params['title'] = $_POST['jdlc_instrument_title'];
  $instrument_params['subtitle'] = $_POST['jdlc_instrument_subtitle'];
  $instrument_params['model'] = $_POST['jdlc_instrument_model'];
  $instrument_params['manufacturer'] = $_POST['jdlc_instrument_manufacturer'];
  $instrument_params['room'] = $_POST['jdlc_instrument_room'];
  $instrument_params['building'] = $_POST['jdlc_instrument_building'];
  $instrument_params['description'] = $_POST['jdlc_instrument_description'];
  $instrument_params['image'] = $_POST['jdlc_instrument_image'];
  $instrument_params['image2'] = $_POST['jdlc_instrument_image2'];
  $instrument_params['image3'] = $_POST['jdlc_instrument_image3'];
  $instrument_params['link_label'] = $_POST['jdlc_instrument_link_label'];
  $instrument_params['link_url'] = $_POST['jdlc_instrument_link_url'];
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

add_action( 'init', 'create_instrument_post_type' );
add_action( 'add_meta_boxes', 'add_instrument_metaboxes');
add_action('save_post', 'jdlc_save_instrument_meta', 2, 2);

?>
