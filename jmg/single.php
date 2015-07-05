<?php get_header(); ?>

<div id="carousel" class="container content header bgDiv" style="background: url('<?php echo get_static_uri('banner_images/blog_post_header.jpg'); ?>') no-repeat;
background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;
background-position: center center; margin-bottom: 100px;">
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
<div class="container content post" style="margin: 50px auto 0px auto !important;">
	<div class="row">
		<div class="col col-span-1 middle-left" style="border-top: 1px solid gray; border-bottom: 1px solid gray; line-height: 10px;">
			<p style="font-size: 12px !important;  line-height: 10px;">
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
 

<div class="container content post" style="margin-top: 50px !important;">
	<div class="row">
		<div class="col col-span-1 middle-left">
			<p>Related Posts</p>
		</div>
	</div>
	<div class="row">
		<?php query_posts( array( 'posts_per_page' => 3 ) ); ?>
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<div class="col col-span-1 middle-left" style="padding:10px !important;">
				<a href="<?php the_permalink(); ?>"><img class="normalImg" src="<?php echo catch_that_image(); ?>"/></a>
				<p>
					<?php the_title(); ?><br/>
					<?php echo get_the_date("F jS"); ?>
				</p>
			</div>	
		<?php endwhile; endif; ?>
	</div>		
</div>
<div class="container content" style="margin: 50px auto 100px auto !important;">
	<div class="row">
		<div class="col col-span-1 middle-left" style="border-top: 1px solid gray; border-bottom: 1px solid gray;">
			<p style="font-size: 12px !important; line-height: 10px;">< <?php previous_post_link('%link', 'Previous', FALSE); ?></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
