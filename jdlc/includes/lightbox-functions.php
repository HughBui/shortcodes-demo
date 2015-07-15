<?php

function lightbox_launcher_shortcode($atts, $content) {
  $a = shortcode_atts(array(
    'id' => '',
    'class' => ''
  ), $atts);
  return '<div class="lightbox-launcher '.$a['class'].'" onclick="jdlcLaunchLightbox(\''.$a['id'].'\');">'.parse_shortcode_content($content).'</div>';
}
add_shortcode('lightbox_launcher', 'lightbox_launcher_shortcode');

function lightbox_shortcode($atts, $content) {
  $a = shortcode_atts(array(
    'id' => ''
  ), $atts);
  $parsed = parse_shortcode_content($content);
  return <<<HTML
    <div class="lightbox" id="{$a['id']}">
     <span class="lightbox-control" onclick="jdlcCloseLightbox()"></span>
     <div class="lightbox-content">$parsed</div>
    </div>
HTML;
}
add_shortcode('lightbox', 'lightbox_shortcode');

/* takes a WP_POST object and generates the content for a lightbox */
function lightbox_content_helper_article($post){
  $title = strtoupper($post->post_title);
  $content = wpautop($post->post_content);
  $imId = jdlc_generate_html_id();
  $images[0] = get_post_meta($post->ID, 'image', true);
  $images[1] = get_post_meta($post->ID, 'image2', true);
  $images[2] = get_post_meta($post->ID, 'image3', true);
  $returnString .= <<<HTML
    <div class="left">
      <h1>{$title}</h1>
      <div class="content">{$content}</div>
    </div>
      <div class="right">
        <div class="image_select" id="{$imId}">
          <div class="feature"></div>
          <div class="others">
HTML;
  for ($i = 0; $i < 3; $i++) {
    $im = $images[$i];
    if ($im == '') { continue; }
    $returnString .= '
      <div style="background-image: url('.$im.')" onclick="jdlcUpdateFeaturedImage(\''.$imId.'\', '.$i.');"></div>';
  }
  $returnString .= '
      </div>
        <script type="text/javascript">
          jdlcUpdateFeaturedImage(\''.$imId.'\');
        </script>
      </div>
    </div>';
  return $returnString;
}

/* takes a youtube link as a string and generates the video content for a lightbox */
function lightbox_content_helper_youtube($link){
  return '<div class="yt"><iframe class="yt-iframe" src="'.$link.'" frameborder="0" allowfullscreen></iframe></div>';
}

function booking_link_shortcode($atts, $content) {
  $a = shortcode_atts(array(
    'url' => ''
  ), $atts);
  return '<a href="'.$a['url'].'"><div class="booking_link">'.strtoupper($content).'</div></a>';
}
add_shortcode('booking_link','booking_link_shortcode');

?>
