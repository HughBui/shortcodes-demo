<?php get_header(); ?>

<div style="height:220px;"></div>


<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();
  the_content();
endwhile;

endif;
 ?>
 

<div class="container content post" style="margin-top: 50px !important;">
	<div class="row">
		<div class="col col-span-1 middle-left">
			<p>Related Posts</p>
		</div>
	</div>
	<div class="row">
		<?php query_posts( array( 'posts_per_page' => 3 ) ); ?>
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<div class="col col-span-1 middle-left">
				<a href="<?php the_permalink(); ?>"><img class="normalImg" src="<?php echo catch_that_image(); ?>"/></a>
				<p>
					<?php the_title(); ?><br/>
					<?php echo get_the_date(); ?>
				</p>
			</div>	
		<?php endwhile; endif; ?>
	</div>		
</div>

<?php previous_post(); ?>

<?php get_footer(); ?>
