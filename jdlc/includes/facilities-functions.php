<?php
function facility_shortcode($atts) {
  $a = shortcode_atts(array(
    'color' => '',
    'name' => 'Facility Name',
    'content' => 'Lots and lots of content.',
    'link' => ''
  ), $atts);

  return '
<a href="'.$a['link'].'">
<div class="facility">
  <div class="header">'. strtoupper($a['name']) .'</div>
  <div class="color_slide" style="background-color: '. $a['color'] .'"><span>'. $a['content'] .'</span></div>
</div>
</a>';
}
add_shortcode('facility', 'facility_shortcode');

function facility_container_shortcode($atts, $content) {
  $a = shortcode_atts(array(), $atts);
  $content = do_shortcode($content);

  return <<<HTML
    <div class="facilities_container">
      $content
    </div>
HTML;
}
add_shortcode('facilities_container', 'facility_container_shortcode');

function make_facility_header($facility) {
  switch ($facility) {
    case "shrimp":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/1shrimp.jpg'));
    case "mmf":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/2MMF.jpg'));
    case "dmh":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/3dmh.jpg'));
    case "tims":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/4tims.jpg'));
    case "trace":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/5trace.jpg'));
    case "aif":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/6aif.jpg'));
    case "argos":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/7argos.jpg'));
    case "minsep":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/8MinSep.jpg'));
    case "xsaf":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/9Xsaf.jpg'));
    case "saxs":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/10Saxs.jpg'));
    case "egf":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/11egf.jpg'));
    case "oigc":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/12oigc.jpg'));
    case "gap":
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/13Gap.jpg'));
    default:
      return jdlc_gradient_css('rgba(45,73,100,0.2)', '#F0F0F0', get_static_uri('facility_banners/1shrimp.jpg'));
  }
}

function header_shortcode($atts, $content) {
  return '<h1 class="header">'. $content .'</h1>';
}
add_shortcode('header', 'header_shortcode');

function facility_paragraph_shortcode($atts, $content) {
  return '<p class="paragraph">'. $content .'</p>';
}
add_shortcode('paragraph', 'facility_paragraph_shortcode');

function facility_grid_layout_shortcode($atts, $content) {
  return '<div class="grid">'. do_shortcode($content) .'</div>';
}
add_shortcode('grid_layout', 'facility_grid_layout_shortcode');

function grid_item_shortcode($atts, $content) {
  $a = shortcode_atts(array(
    'header' => ''
  ), $atts);
  return '<div class="grid_item">
    <div class="header">'. $a['header'] .'</div>
    '. parse_shortcode_content($content) .'</div>';
}
add_shortcode('grid_item', 'grid_item_shortcode');

function image_grid_layout_shortcode($atts, $content) {
  return '<div class="image-grid">'. parse_shortcode_content($content) .'</div>';
}
add_shortcode('image_grid_layout', 'image_grid_layout_shortcode');

function image_grid_item_shortcode($atts, $content) {
  $a = shortcode_atts(array(
    'src' => ''
  ), $atts);
  return '<div style="background-image: url('.$a['src'].')" class="image_grid_item"></div>';
}
add_shortcode('image_grid_item', 'image_grid_item_shortcode');

function content_block_shortcode($atts, $content) {
  $a = shortcode_atts(array(
    'background' => '#EFEFEF',
    'class' => ''
  ), $atts);
  return '<div class="section '.$a['class'].'" style="background-color: '.$a['background'].'">'.parse_shortcode_content($content).'</div>';
}
add_shortcode('section', 'content_block_shortcode');

function general_slider_shortcode($atts, $content) {
  $sliderId = jdlc_generate_html_id();
  return '<div class="slider" id="'.$sliderId.'">
    <div class="next icon-chevron-right" onclick="sliderAction(1, \''.$sliderId.'\');"></div>
    <div class="prev icon-chevron-left" onclick="sliderAction(-1, \''.$sliderId.'\');"></div>
    '.parse_shortcode_content($content).'
  </div>
  <script type="text/javascript">
    initialiseSlider("'.$sliderId.'");
  </script>';
}
add_shortcode('general_slider', 'general_slider_shortcode');

function slide_shortcode($atts, $content) {
  return '<div class="slide">'.parse_shortcode_content($content).'</div>';
}
add_shortcode('slide', 'slide_shortcode');

function person_shortcode($atts) {
  $a = shortcode_atts(array(
    'name' => '',
    'picture' => '',
    'description' => '',
    'department' => '',
	'link' => '',
    'email' => '',
    'phone' => ''
  ), $atts);
  
  $departments = explode("|", $a['department']);
  $links = explode("|", $a['link']);
  $deps = "";
  for($i = 0; $i < count($departments); $i++){
	$deps .= '<span '.(trim($links[$i]) == '' || isset($links[$i]) == false ? "" : "style=\"cursor: pointer;\" onclick=\"window.location='".trim($links[$i])."'\"").'>'.trim($departments[$i]).'</span> & ';
  }
  
  return '
<div class="person">
  <div class="picture" style="background-image: url('.$a['picture'].')"></div>
  <div class="name">'.$a['name'].'</div>
  <div class="department">'.substr($deps, 0, -3).'</div>
  <div class="email">'.$a['email'].'</div>
  <div class="phone">'.$a['phone'].'</div>
</div>';
}
add_shortcode('person', 'person_shortcode');

?>
