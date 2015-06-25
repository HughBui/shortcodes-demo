<?php
/*
 * Template Name: Taphouse
 * Description: This is identical to page.php because 
 *              Front page also allows dynamic contents
 */

?>

<?php get_header(); ?>


<?php query_posts( array( 'posts_per_page' => 3 ) ); ?>


<?php if(have_posts()): while(have_posts()): the_post(); ?>

<h1 class="post-heading"><?php the_title(); ?></h1>

<div class="content"><?php the_excerpt(); ?></div>

<a href="<?php the_permalink(); ?>">Read More</a>

<?php endwhile; endif; ?>


<?php get_footer(); ?>
