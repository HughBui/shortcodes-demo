<?php

function multi_article_render_helper($posts){
  foreach($posts as $post){
   $posts_string .= single_article_render_helper($post); 
  }
  return <<<HTML
    <div>
      <div class="research-articles-container">{$posts_string}</div>
    </div>
HTML;
}

function single_article_render_helper($post){
  $post_id = jdlc_generate_html_id();
  $post_class = null;
  $post_year = get_post_time('Y', false, $post->ID);
  if(has_post_thumbnail($post->ID)){
    $post_class = "has_image";
  }
  $posts_string .= '
    [lightbox_launcher id="'.$post_id.'" class="filtered-article '.$post_year.'"]
      <div class="post" style="border-bottom: 20px solid white !important;">';
  if (has_post_thumbnail($post->ID)){
    $posts_string .= '<div class="featured-img">'.get_the_post_thumbnail($post->ID,'medium').'</div>';
  }
  $posts_string .= '
      <div class="post-meta '.$post_class.'">
        <div class="title">'.strtoupper($post->post_title).'</div>
        <div class="time">'.get_post_time('F jS, Y', false, $post->ID).'</div><br/>
        <div class="blurb">'.$post->post_excerpt.'</div>
      </div>
    </div>
    [/lightbox_launcher]
    [lightbox id="'.$post_id.'"]'.lightbox_content_helper_article($post).'[/lightbox]';
  return $posts_string;
}

?>
