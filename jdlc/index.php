<?php get_header('index'); ?>
<div id="main">
  <div id="home_content">
  <?php echo do_shortcode('[fields-of-research]'); ?>
  <?php echo do_shortcode('[clientmap]'); ?>
  <?php echo do_shortcode('[posts-slideshow]'); ?>
  <?php echo do_shortcode('[in_honour_of]'); ?>
  </div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
