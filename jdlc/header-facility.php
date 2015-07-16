<?php get_template_part('head'); ?>
<body>
<div id="wrapper">
<div id="header-facility" style="<?php echo make_facility_header(get_post_custom_values('facility_type')[0]); ?>">
<?php get_template_part('menu'); ?>
<div class="header_text">
  <?php  $shortname = get_post_custom_values('short-name');
  if(!empty($shortname)) :?>
    <div class="shortname">(<?php echo $shortname[0] ?>)</div>
  <?php endif ?>
  <div class="title"><?php echo strtoupper(get_the_title()); ?></div>
  <div class="subtitle">
    <?php
    $subtitle = get_post_custom_values('subtitle');
    if(empty($subtitle)): ?>
      Add custom page attribute 'subtitle' and put desired text as value.
    <?php else: ?>
      <?php echo get_post_custom_values('subtitle')[0]; ?>
    <?php endif ?>
  </div>

  <?php
    $yt_link = get_post_custom_values('youtube-link')[0];
    $lbID = jdlc_generate_html_id();
    $btn = '[lightbox_launcher id="'.$lbID.'" class="play_button"]<div class="play_button" style="background-image: url('.get_static_uri('play-button-white.png').')"></div>[/lightbox_launcher]';
    $btn .= '[lightbox id="'.$lbID.'"]'.lightbox_content_helper_youtube($yt_link).'[/lightbox]';
    echo $yt_link == "" ? "<p><br/></p>" : parse_shortcode_content($btn);
  ?>
  <div class="description"><?php echo strtoupper(get_post_custom_values('description')[0]); ?></div>
</div>
</div>
