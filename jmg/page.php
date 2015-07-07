<?php
/*
 * Template Name: JMG
 * Description: JMG Page.
 */

// Code to display Page goes here...?>


<?php get_header(); ?>

 <!-- Page Content -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
  endwhile; else: ?>
    <p><?php _e('Sorry, page not found') ?><p>
  <?php endif; ?>
  <!-- End Page Content -->

<?php get_footer(); ?>
