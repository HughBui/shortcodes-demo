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
  return <<<HTML
    <div class="post-title">{$title}</div>
    <div class="post-content">{$content}</div>
HTML;
}

/* takes a youtube link as a string and generates the video content for a lightbox */
function lightbox_content_helper_youtube($link){
  return '<iframe class="yt-iframe" src="'.$link.'" frameborder="0" allowfullscreen></iframe>';
}

?>
