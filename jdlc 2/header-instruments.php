<?php get_template_part('head'); ?>
<body>
<div id="wrapper">
<div id="header-instruments" style="<?php echo jdlc_gradient_css('rgba(45,100,80,0.9)', 'rgba(45,100,80,0.9)', get_static_uri('_Facilities-image.jpg')); ?>">
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
</div>
</div>
</div>
