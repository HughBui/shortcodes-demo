<?php

function instrument_list_shortcode() {
  $posts = get_posts(array(
    'post_type' => 'instrument',
    'numberposts' => -1,
    'orderby' => 'title'
  ));
  $returnString = '<div class="instruments" data-count="'.count($posts).'">';
  foreach ($posts as $post) {
    $id = jdlc_generate_html_id();
    $imId = jdlc_generate_html_id();
    $images[0] = get_post_meta($post->ID, 'image', true);
    $images[1] = get_post_meta($post->ID, 'image2', true);
    $images[2] = get_post_meta($post->ID, 'image3', true);
    $returnString .= '
      [lightbox_launcher id="'.$id.'" class="instrument"]
        <div class="pic" style="background-image: url('.get_post_meta($post->ID, 'image', true).');"></div>
        <div class="name">'.strtoupper(get_post_meta($post->ID, 'title', true)).'</div>
        <div class="desc">'.get_post_meta($post->ID, 'description', true).'</div>
      [/lightbox_launcher]
      [lightbox id="'.$id.'"]
        <div class="left">
          <h1>'.strtoupper(get_post_meta($post->ID, 'title', true)).'</h1>
          <h2>'.strtoupper(get_post_meta($post->ID, 'facility', true)).'</h2>
          <div class="detail">Manufacturer: '.get_post_meta($post->ID, 'manufacturer', true).'</div>
          <div class="detail">Model: '.get_post_meta($post->ID, 'model', true).'</div>
          <div class="detail">Year: '.get_post_meta($post->ID, 'year', true).'</div>
          <div class="detail">Building: '.get_post_meta($post->ID, 'building', true).'</div>
          <div class="detail">Room: '.get_post_meta($post->ID, 'room', true).'</div>
          <div class="description">'.get_post_meta($post->ID, 'description', true).'</div>';
        if(get_post_meta($post->ID, 'link_label',true))
          $returnString .= '<div class="lbLinkContainer">
          <a class="lbLink" href="'.get_post_meta($post->ID,'link_url',true).'">'.strtoupper(get_post_meta($post->ID, 'link_label',true)).'</a></div>';
        $returnString .= '</div>
        <div class="right">
          <div class="image_select" id="'.$imId.'">
            <div class="feature"></div>
            <div class="others">';
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
        </div>
      [/lightbox]';
  }
  $returnString .= '</div>';
  return parse_shortcode_content($returnString);
}
add_shortcode('instrument_list', 'instrument_list_shortcode');

?>
