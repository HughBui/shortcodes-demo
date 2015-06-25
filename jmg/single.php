<?php get_header(); ?>

<div style="height:220px;"></div>

	<div class="container content" style="border:1px solid red;">
		<div class="row narrow">
			<div class="col col-span-1 top-left">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>

<?php 

if ( have_posts() ) : while ( have_posts() ) : the_post();
  the_content();
endwhile;

endif;

 
 
 
 // Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
 
 ?>
 
 
 <?php query_posts( array( 'posts_per_page' => 3 ) ); ?>


<?php if(have_posts()): while(have_posts()): the_post(); ?>

<h1 class="post-heading"><?php the_title(); ?></h1>

<?php 

echo '<img src="';
 echo catch_that_image();
 echo '" alt="" />';

?>

<div class="content"><?php the_excerpt(); ?></div>


<a href="<?php the_permalink(); ?>">Read More</a>

<?php endwhile; endif; ?>
 
 <?php get_footer(); ?>
