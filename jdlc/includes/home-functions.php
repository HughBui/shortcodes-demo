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
    <!--<div class="research-sub">We host over $25M in world-class analytical and mass spectrometry infrustructure in key facilities supporting research in:</div>-->
    <div class="glyphs">'
    . research_glyph('globe-icon.jpg', 'Planetary Science')
    . research_glyph('recycle-icon.jpg','Environment Science')
    . research_glyph('atom-icon.jpg','Geochronology<br/>&nbsp;')
    . research_glyph('gene-icon.jpg','Forensic Science')
    . research_glyph('diamond-icon.jpg','Economic Geology')
    . research_glyph('wheel-icon.jpg','Marine<br/>Science')
    . research_glyph('material-icon.png','Material Science')
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
    . clientmap_pin_helper('96%','91%','New Zealand Centre of Research')
    . clientmap_pin_helper('79%','83%','JDLC');
  $inner = parse_shortcode_content($content);
  $height = "";
  $posts = get_posts(array(
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' => 'Featured',
    'showposts' => 3));
  if(count($posts) == 0){
    $height = "height: 700px;";
  }
  return <<<HTML
    <div class="map-view" style="background-image: url('{$background_im}'); {$height}">
      <div class="map-container">{$pins}<img class="map" src="{$map_im}"></img></div>
      <div class="map-tagline">WE COLLABORATE WITH LEADING<br/>INSTITUTIONS AND ORGANISATIONS</div>
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
  $hasPost = false;
  $a = shortcode_atts(array(
    'buttonText' => 'See all news'
  ), $atts);
  // set uppercase where required
  $a['buttonText'] = strtoupper($a['buttonText']);
  $return_string = '[general_slider class="posts_slideshow"]';
  $posts = get_posts(array(
    'orderby' => 'date',
    'order' => 'DESC',
  'category_name' => 'Featured',
    'showposts' => 3));
  $return_string .= "[slide]".multi_article_render_helper($posts)."[/slide]";
  if(count($posts) > 0){
    $hasPost = true;
  }
  $posts = get_posts(array(
    'orderby' => 'date',
    'order' => 'DESC',
  'category_name' => 'Featured',
    'showposts' => 3,
    'offset' => 3));
  if(count($posts) > 0){
    $return_string .= "[slide]".multi_article_render_helper($posts)."[/slide]";
  }
  $return_string .= "[/general_slider]";
  $return_string .= '<a class="all_news_button" href="'.get_permalink(get_page_by_path('research')).'">'.$a['buttonText'].'</a>';
  return $hasPost ? parse_shortcode_content($return_string) : "";
}

function in_honour_of_shortcode($atts, $content=null) {
  $a = shortcode_atts(array(
    'image' => get_static_uri('john_de_laeter.jpg'),
    'name' => 'Professor John De Laeter (1933 - 2010)'
  ), $atts);
  //set all caps where required
  $a['name'] = strtoupper($a['name']);
  if (is_null($content) || $content == '') {
    $content = '
      John de Laeter established the Physics Department at Curtin University in 1968, and developed a geochronology capability in WA in collaboration with the Geological Survey of Western Australia. Rising to the position of Deputy Vice-Chancellor of Research and Development, John spearheaded a tripartite proposal to commission a new SHRIMP ion microprobe at Curtin in 1994, and received funding in 1998 to establish a State Centre of Excellence Program in geochemistry and isotope science which was aptly named the John de Laeter Centre for Mass Spectrometry. He also collaborated with the WA Museum on studying the state meteorite collection, and co-authored the book “Meteorites: A journey through space and time”. John de Laeter’s legacy includes a substantive body of published works, a celestial body that carries his name (Minor Planet de Laeter 3893), and a devoted group of students and colleagues that carry on his tradition of collaborative research that shapes our collective understanding of the Earth and its place in the Universe.';
  }

  return '
    <div class="in_honour_of">
      <div class="image" style="background-image: url('.$a['image'].');"></div>
      <div class="text">
        <div id="jdlBio" class="name">'.$a['name'].'</div>
        <div class="content">'.$content.'</div>
      </div>
    </div>';
}

add_shortcode('in_honour_of','in_honour_of_shortcode');
add_shortcode('posts-slideshow','homepage_posts_slideshow_shortcode');

?>
