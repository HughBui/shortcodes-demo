<?php

/* featured article above research */

function image_author_helper($image_url = null, $image_tag = null){
  if(!$image_url)
    return null;

  return <<<HTML
    <div class="image-author-container">
      <img src="{$image_url}" alt="{$image_tag}">
      <div class="author-tag">{$image_tag}</div>
    </div>
HTML;
}

function featured_article_shortcode($atts, $content = null){
  // values for article
  $a = shortcode_atts(array(
    'title' => "Title",
    'image1' => null,
    'image1tag' => null,
    'image2' => null,
    'image2tag' => null
  ),$atts);

  $image_container = null;
  $images = image_author_helper($a['image1'],$a['image1tag']) . image_author_helper($a['image2'],$a['image2tag']);
  if($images){
    $image_container = <<<HTML
      <div class="image">{$images}</div>
HTML;
  }
  // perform filters
  $title = strtoupper($a['title']);
  $content = wpautop($content, true);
  return <<<HTML
  <div class="featured-article">
    <div class="title">{$title}</div>
    <div class="content">
      <div class="written">{$content}</div>
      {$image_container}
    </div>
  </div>
HTML;
}

add_shortcode('featured-article', 'featured_article_shortcode');

/* shortcode for date seperated articles */

function post_filter_switcher_helper($post_container_id, $posts, $switcher_id){
  $years_of_range = array();
  foreach($posts as $post){
    $post_year = get_post_time('Y', false, $post->ID);
    if(!in_array($post_year,$years_of_range)){
      array_push($years_of_range, $post_year);
      $switcher_items .= '<div class="switcher-button" 
        onclick="applyFilterToCollection(\''.$post_container_id.'\',\''.$post_year.'\',\''.$switcher_id.'\',this);">'.$post_year.'</div>';
      }
  }
  return <<<HTML
    <div id="{$switcher_id}" class="date-range-switcher">{$switcher_items}</div>
HTML;
}

function research_articles_shortcode(){
  $switcher_id = jdlc_generate_html_id();
  $container_id = jdlc_generate_html_id();
  // get posts
  $posts = get_posts(array('orderby' => 'date', 'order' => 'DESC', 'numberposts' => -1));
  // make containers
  foreach ($posts as $post){
    $post_id = jdlc_generate_html_id();
    $post_class = null;
    $post_year = get_post_time('Y', false, $post->ID);
    if(has_post_thumbnail($post->ID)){
      $post_class = "has_image";
    }
    $posts_string .= '
      [lightbox_launcher id="'.$post_id.'" class="filtered-article '.$post_year.'"]
        <div class="post">';
    if (has_post_thumbnail($post->ID)){
      $posts_string .= '<div class="featured-img">'.get_the_post_thumbnail($post->ID,'medium').'}</div>';
    }
    $posts_string .= '
          <div class="post-meta '.$post_class.'">
            <div class="title">'.strtoupper($post->post_title).'</div>
            <div class="time">'.get_post_time('F jS, Y', false, $post->ID).'</div>
            <div class="blurb">'.wp_trim_words($post->post_content, 50, '...').'</div>
          </div>
        </div>
      [/lightbox_launcher]
      [lightbox id="'.$post_id.'"]'.lightbox_content_helper_article($post).'[/lightbox]';
  }
  // make switcher
  $posts_string = do_shortcode($posts_string);
  $switcher = post_filter_switcher_helper($container_id, $posts, $switcher_id);
  // add posts
  return <<<HTML
    <div class="research-articles">
      <div>{$switcher}</div>
      <div>
        <div id="{$container_id}" class="research-articles-container">{$posts_string}</div>
      </div>
    </div>
    <script type="text/javascript">
      applyFirstFilter('{$switcher_id}');
    </script>
HTML;
}

add_shortcode('research-articles', 'research_articles_shortcode');

function publications_shortcode(){
  $switcher_id = jdlc_generate_html_id();
  $container_id = jdlc_generate_html_id();
  // get posts
  $posts = get_posts(array(
    'numberposts' => -1,
    'post_type' => 'publication',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
    'meta_key' => 'year',
    'meta_query' => array(
      'key' => 'year',
      'compare' => '=',
      'type' => 'NUMERIC',
    ),
  ));
  $years_of_range = array();
  // make containers
  foreach ($posts as $post){
    $post_year = get_post_meta($post->ID, 'year', true);
    // add switcher button to string
    if(!in_array($post_year,$years_of_range)){
      array_push($years_of_range, $post_year);
      $switcher_items .= '<div class="switcher-button"
          onclick="applyFilterToCollection(\''.$container_id.'\',\''.$post_year.'\',\''.$switcher_id.'\',this);"
        >'.$post_year.'</div>';
    }
    $posts_string .= '
      <div class="filtered-publication '.$post_year.'" class="publication">
        <span class="authors">'.get_post_meta($post->ID, 'authors', true).'</span>
        <span class="year">'.$post_year.'.</span>
        <span class="title">'.get_post_meta($post->ID, 'title', true).'</span>
        <span class="journal">'.get_post_meta($post->ID, 'journal', true).'</span>
      </div>';
  }
  // make switcher
  $id = jdlc_generate_html_id();
  // add posts
  return <<<HTML
    <div class="publications">
      <div>
        <div class="section-title">OUR PUBLICATIONS</div>
        <div class="section-sub">John de Laeter Centre provides unique quantitative data on the way the Earth works, elucidating the changing environment we live in and the nature and origin of resources we depend on</div>
      </div>
      <div>
        <div id="{$switcher_id}" class="date-range-switcher">{$switcher_items}</div>
      </div><div>
        <div id="{$container_id}" class="publication-container">{$posts_string}</div>
      </div>
      <script type="text/javascript">
        applyFirstFilter('{$switcher_id}');
      </script>
    </div>
HTML;
}

add_shortcode('publications', 'publications_shortcode');
?>
