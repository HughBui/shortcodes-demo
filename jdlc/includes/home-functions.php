<?php

/* fields of research */

function research_glyph($image, $label){
  return '<div class="glyph">
    <div class="glyph-image" style="background-image: url(\'' . get_static_uri($image) . '\');"></div>
    <div class="glyph-label">' . $label . '</div>
    </div>';
}
  
function fields_of_research_shortcode(){
  return '<div class="fields-of-study">
    <div class="research-title">FIELDS OF RESEARCH</div>
    <div class="research-sub">We host over $25M in world-class analytical and mass spectrometry infrustructure in key facilities supporting research in:</div>
    <div class="glyphs">'
    . research_glyph('globe-icon.jpg', 'Geological Sciences')
    . research_glyph('recycle-icon.jpg','Environmental Sciences')
    . research_glyph('atom-icon.jpg','Economic Geology')
    . research_glyph('gene-icon.jpg','Forensic Sciences')
    . research_glyph('diamond-icon.jpg','Isotope Metrology')
    . research_glyph('wheel-icon.jpg','Marine Sciences')
    . research_glyph('nuke-icon.jpg','Nuclear Sciences')
    . '</div></div>';
}

add_shortcode('fields-of-research', 'fields_of_research_shortcode');

/* client listing + world map */

function clientmap_shortcode(){
  $clients = clientbox_shortcode_helper('logo-shell.jpg')
    . clientbox_shortcode_helper('logo-iluka.jpg')
    . clientbox_shortcode_helper('logo-independence.jpg')
    . clientbox_shortcode_helper('logo-debeers.jpg')
    . clientbox_shortcode_helper('logo-santos.jpg')
    . clientbox_shortcode_helper('logo-anglo.jpg')
    . clientbox_shortcode_helper('logo-chevron.jpg')
    . clientbox_shortcode_helper('logo-rio.jpg');
  return collaborate_map_shortcode($clients);
}

/* helper containing map and using shortcode provided in content variable */

function clientmap_pin_helper($x, $y, $content){
  $map_circle_uri = get_static_uri('map-circle.png');
  return <<<HTML
    <div class="map-pin" style="left: {$x}; top: {$y};">
      <img src="{$map_circle_uri}">
      <div class="map-label">{$content}</div>
    </div>
HTML;
}

function collaborate_map_shortcode($content = null){
  $background_im = get_static_uri('background-pattern.jpg');
  $map_im = get_static_uri('map.png');
  $pins = clientmap_pin_helper('11%','25%','Canadian Center for Isotopic Microanalysis')
    . clientmap_pin_helper('12%','44%','American Meteorological Society')
    . clientmap_pin_helper('27%','65%','South Amercian Symposium on Isotope Geology')
    . clientmap_pin_helper('24%','80%','Stable Isotope Group')
    . clientmap_pin_helper('51%','24%', 'Norway Stable Isotope Group')
    . clientmap_pin_helper('53%','35%','German Research Centre')
    . clientmap_pin_helper('46%','40%','French Symposium on Isotope Geology')
    . clientmap_pin_helper('62%','46%','Saudi Arabia Research Centre')
    . clientmap_pin_helper('58%','53%','Iran Research Centre')
    . clientmap_pin_helper('69%','58%','Indian Research Centre')
    . clientmap_pin_helper('82%','41%','Korean Research Centre')
    . clientmap_pin_helper('76%','51%','China Centre for Microanalysis')
    . clientmap_pin_helper('85%','44%','Japanese Stable Isotope Group')
    . clientmap_pin_helper('88%','69%','Indonesian Society for Isotope Research')
    . clientmap_pin_helper('96%','91%','New Zealand Centre of Research');
  $inner = parse_shortcode_content($content);
  return <<<HTML
    <div class="map-view" style="background-image: url('{$background_im}');">
      <div class="map-container">{$pins}<img class="map" src="{$map_im}"></img></div>
      <div class="map-tagline">WE COLLABORATE WITH INTERNATIONAL ORGANISATIONS AROUND THE WORLD</div>
      <div class="client-list">{$inner}</div>
    </div>
HTML;
}

function clientbox_shortcode($atts){
  $a = shortcode_atts( array(
    'logo' => '',
  ), $atts );

  return '<div class="client-cell"><div style="background-image: url(\'' . $a['logo'] . '\');"></div></div>';
}

/* helper to get static image and generate shortcode for client box */
function clientbox_shortcode_helper($image){
  return '[client logo="' . get_static_uri($image) . '"]';
}

add_action('init', 'clientbox_shortcode_helper');
add_shortcode('clientmap','clientmap_shortcode');
add_shortcode('client', 'clientbox_shortcode');

function homepage_posts_slideshow_shortcode($atts) {
  $a = shortcode_atts(array(
    'buttonText' => 'See all news'
  ), $atts);

  $return_string = '<div class="posts_slider">';
  $posts = get_posts(array(
    'orderby' => 'date',
    'order' => 'DESC',
    'showposts' => 3));
  foreach ($posts as $post) :
    $lbID = jdlc_generate_html_id();
    $return_string .= '
      [lightbox_launcher id="'.$lbID.'"]
        <div class="post">
          <div class="title">'.$post->post_title.'</div>
          <div class="time">'.get_post_time('F jS, Y', false, $post->ID).'</div>
          <div class="blurb">'.wp_trim_words($post->post_content, 50, '...').'</div>
        </div>
      [/lightbox_launcher]
      [lightbox id="'.$lbID.'"]'.lightbox_content_helper_article($post).'[/lightbox]';
  endforeach;
  $return_string .= "</div>";
  $return_string .= '<div class="all_news_button">'.$a['buttonText'].'</div>';
  return parse_shortcode_content($return_string);
}

function in_honour_of_shortcode($atts, $content=null) {
  $a = shortcode_atts(array(
    'image' => get_static_uri('john_de_laeter.jpg'),
    'name' => 'Professor John De Laeter (1933 - 2010)'
  ), $atts);
  if (is_null($content) || $content == '') {
    $content = '
      Established under the Western Australia Government\'s Centre of Excellence
      nd Innovation Program in 1999, the Centre for Isotope Research is named
      in honour of one of Western Australia\'s pioneering leaders in the field
      of isotope research and scientific education.';
  }

  return '
    <div class="in_honour_of">
      <div class="image" style="background-image: url('.$a['image'].');"></div>
      <div class="text">
        <div class="name">'.$a['name'].'</div>
        <div class="content">'.$content.'</div>
      </div>
    </div>';
}

add_shortcode('in_honour_of','in_honour_of_shortcode');
add_shortcode('posts-slideshow','homepage_posts_slideshow_shortcode');

?>
