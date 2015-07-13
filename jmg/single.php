<?php get_header(); ?>

<div id="carousel" class="container content header bgDiv" style="background: url('<?php echo get_static_uri('banner_images/blog_post_header.jpg'); ?>') no-repeat;
background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;
background-position: center center;">
	<div class="row ">
		<div class="col col-span-1">
			<h1>THE LARGEST &#038; MOST <br/> EXPERIENCED IN WA</h1>
			<p class="" >WA&#8217;S LARGEST &#038; MOST PROGRESSIVE CERTIFICATION COMPANY.</p>
		</div>
	</div>
</div>

<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();
 ?>
<div class="container content post" style="padding-top: 100px !important;">
	<div class="row">
		<div class="col col-span-1 middle-left info">
			<p>
				By<b><?php echo get_the_author(); ?></b> | 
				<?php echo get_the_date("F jS, Y"); ?> | 
				<?php echo get_the_category()[0]->cat_name; ?>
			</p>
		</div>
	</div>
</div>
 <?php 
  the_content();
endwhile;

endif;
 ?>
 

<div class="container content post related-posts">
	<div class="row">
		<div class="col col-span-1 middle-left">
			<p><b>Related Posts</b></p>
		</div>
	</div>
	<div class="row">
		<?php query_posts( array( 'posts_per_page' => 3 ) ); ?>
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<div class="col col-span-1 middle-left">
				<img class="normalImg" src="<?php echo catch_that_image(); ?>" 
					onclick="window.location.href ='<?php the_permalink(); ?>';" style="cursor:pointer;"/>
				<p>
					<b><?php the_title(); ?></b><br/>
					<span><?php echo get_the_date("F jS"); ?></span>
				</p>
			</div>	
		<?php endwhile; endif; ?>
	</div>		
</div>
<div class="container content post previous">
	<div class="row">
		<div class="col col-span-1 middle-left info">
			<p>< <?php previous_post_link('%link', 'Previous', FALSE); ?></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
