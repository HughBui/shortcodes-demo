<?php
/*
 * Template Name: JMG
 */
?>

<?php

function assignPageTitle(){
	return "JMG - Blog";
}
add_filter('wp_title', 'assignPageTitle');

$posts_per_page = 2;

?>

<?php
//Protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
$cat = ( get_query_var( 'cat' ) ) ? absint( get_query_var( 'cat' ) ) : 0;
$s = ( get_query_var( 's' ) ) ? get_query_var( 's' ) : '';

$args = array(
	'posts_per_page' =>  $posts_per_page,
	'cat' => $cat,
	'paged' => $paged,
	's' => $s,
	'post_type' => 'post',
	);

$the_query = new WP_Query( $args );
$categories = get_categories();
?>

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

<div class="container content blog">
	<div class="row">
		<div class="col col-span-8 middle-left cat">
			<span class="selected">
				<?php echo "<a style=\"\" href='".get_site_url()."'>All</a>"; ?>
			</span>
			<?php if($categories){ foreach($categories as $category) { ?>
			<span>
				<?php echo "<a href='".get_category_link($category->term_id)."'>".$category->cat_name."</a>"; ?>
			</span>
			<?php }}?>
		</div>
		<div class="col col-span-1 search">
			<?php echo do_shortcode('[wpbsearch]'); ?>
		</div>
	</div>	
</div>

<?php if($the_query->have_posts()): while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
	<div class="container content blog">
		<div class="row">
			<div class="col col-span-1 middle-left extract">
				<a href="<?php the_permalink(); ?>">
					<img class="normalImg" src="<?php echo catch_that_image(); ?>"/>
				</a>
			</div>
			<div class="col col-span-1 middle-left extract">
				<h3><?php the_title(); ?></h3><br/>
				<p>
					<?php echo extract_the_content(); echo $s;?><br/>
					<a href="<?php the_permalink(); ?>">(Read more...)</a>
				</p>
			</div>		
		</div>
		<div class="row">
			<div class="col col-span-1 middle-left info">
				<span>
					By<b><?php echo get_the_author(); ?></b> | 
					<?php echo get_the_date("F jS, Y"); ?> | 
					<?php echo get_the_category()[0]->cat_name; ?> | 
					<?php comments_number(); ?> 
				</span>
				<a href="<?php the_permalink(); ?>" style="float: right;">Read More ></a>
			</div>
		</div>	
	</div>	
<?php endwhile; endif; ?>

<?php query_posts( array( 'posts_per_page' => $posts_per_page ) ); ?>
<div class="container content" style="padding:0px;">
	<div class="row">
		<div class="col col-span-1 middle-right" style="display: block;">
			<? pagination($the_query->max_num_pages); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
