<?php get_header(get_post_custom_values('header-type')[0]); ?>
<div id="main" class="<?php echo get_post_custom_values('header-type')[0]; ?>">
<div id="content">
  <!-- Page Content -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
  endwhile; else: ?>
    <p><?php _e('Sorry, page not found') ?><p>
  <?php endif; ?>
  <!-- End Page Content -->
</div>
</div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
