<?php get_template_part('head'); ?>
<body>
<div id="wrapper">
<div id="header-facility" style="<?php echo make_facility_header(get_post_custom_values('facility_type')[0]); ?>">
<?php get_template_part('menu'); ?>
<div class="header_text">
  <div class="title"><?php echo get_the_title(); ?></div>
  <div class="subtitle">
    <?php 
    $subtitle = get_post_custom_values('subtitle');
    if(empty($subtitle)): ?>
      Add custom page attribute 'subtitle' and put desired text as value.
    <?php else: ?>
      <?php echo get_post_custom_values('subtitle')[0]; ?>
    <?php endif ?>
  </div>
  <div class="play_button" style="background-image: url(<?php echo get_static_uri('play-button.png'); ?>);"></div>
  <div class="description"><?php echo get_post_custom_values('description')[0]; ?></div>
</div>
</div>
