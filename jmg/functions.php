<?php

show_admin_bar(false);
register_nav_menu( 'primary', __( 'Primary Menu', 'JMG' ) );

function get_static_uri($resource){
	return get_template_directory_uri() . '/static/' . $resource;
}

function catch_that_image() {
	global $post, $posts;

	$content =  $post->post_content;
	$findme1   = '[image]';
	$findme2   = '[/image]';
	$pos1 = strpos($content, $findme1);
	$pos2 = strpos($content, $findme2);

	if($pos1 == false){
		$findme1   = '[image fit="true"]';
		$pos1 = strpos($content, $findme1);
	}
	
	return get_static_uri(substr($content, $pos1 + strlen($findme1), $pos2 - $pos1 - strlen($findme1)));
}

function extract_the_content() {
	global $post, $posts;

	$content =  $post->post_content;
	$findme1   = '[paragraph]';
	$findme2   = '[/paragraph]';
	$pos1 = strpos($content, $findme1);
	$pos2 = strpos($content, $findme2);
	
	return substr($content, $pos1 + strlen($findme1), $pos2 - $pos1 - strlen($findme1));
}

function pagination($pages = '', $range = 2)
{  
	$showitems = ($range * 2)+1;  

	global $paged;
	if(empty($paged)) $paged = 1;

	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}   

	if(1 != $pages)
	{
		echo "<div class='pagination'>";
         // if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
		if($paged > 1 && $showitems < $pages) echo "<a style=\"border: none; font-weight: bold;\" href='".get_pagenum_link($paged - 1)."'>Previous</a>";

		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
			}
		}

		if ($paged < $pages && $showitems < $pages) echo "<a style=\"border: none; font-weight: bold;\" href='".get_pagenum_link($paged + 1)."'>Next</a>";  
         // if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
		echo "</div>\n";
	}
}

function wpbsearchform( $form ) {

	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '">
	<div>
		<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Search..."/>
		<input type="image" id="searchsubmit" src="'.get_static_uri('blog/search_icon.png').'"/>
	</div>
</form>';

return $form;
}

add_shortcode('wpbsearch', 'wpbsearchform');

add_shortcode('bannerImage', function($atts, $content) {
	$a = shortcode_atts( array(
		'type' => '1'
		), $atts );
	$bannImg = get_static_uri($content);
	$preImg = get_static_uri('arrow_left.png');
	$nextImg = get_static_uri('arrow_right.png');
	include(locate_template('content-banner.php'));
});

add_shortcode('imageItem', function($atts, $content) {
	return'
	<img id="bannerImg" class="bannerImg" style="z-index:-1;" src="
	'.get_static_uri($content).'"/>
	';
});

add_shortcode('columns', function($atts, $content) {
	$a = shortcode_atts( array(
		'bg' => '',
		'dark' => 'false',
		'header' => 'false',
		'narrow' => 'false',
		'arrow' => 'false',
		'desaturate' => 'false',
		'post' => 'false',
		'grid' => 'false'
		), $atts );

	$bgImages = $a["bg"] != '' ? explode(";",$a["bg"]) : [];

	foreach ($bgImages as &$image) {
		$image = get_static_uri(preg_replace('/\s+/', '', $image));
	}

	include(locate_template('content-container.php'));
});

add_shortcode('column', function($atts, $content) {
	$a = shortcode_atts( array(
		'bg' => '',
		'span' => '1',
		'collapsible' => 'false',
		'align' => ''
		), $atts );

	$colImg = $a["bg"] != '' ? get_static_uri($a["bg"]) : '';
	return include(locate_template('content-column.php'));
});

add_shortcode('title', function($atts, $content) {
	$a = shortcode_atts( array(
		'type' => 'h2',
		'style' => ''
		), $atts );
	return '<'.$a["type"].($a["style"] != "" ? " style=\"".$a["style"]."\"" : "").'>'.$content.'</'.$a["type"].'>';
});

add_shortcode('separator', function($atts, $content) {
	return '<hr class="'.$atts["type"].'"/>';
});

add_shortcode('paragraph', function($atts, $content) {
	$a = shortcode_atts( array(
		'type' => '',
		'style' => '',
		'email' => 'false',
		'phone' => 'false'
		), $atts );

	if($a["email"] == "true"){
		return '<p class="'.$a["type"].'" style="'.$a["style"].'">'.
		($a["email"] == "true" ? "<a href=\"mailto:".str_replace(array("<br/>", "<br />", "<p>", "</p>"), "", $content)."\" style=\"decoration:none; color:black;\">" : "").do_shortcode(str_replace(array("<br />", "<p>", "</p>"), "", $content)).
		($a["email"] == "true" ? "</a>" : "").'</p>';
	}else{
		return '<p class="'.$a["type"].'" style="'.$a["style"].'">'.
		($a["phone"] == "true" ? "<a href=\"tel:".$content."\" style=\"decoration:none; color:black;\">" : "").do_shortcode(str_replace(array("<br />", "<p>", "</p>"), "", $content)).
		($a["phone"] == "true" ? "</a>" : "").'</p>';
	}
});

add_shortcode('image', function($atts, $content) {
	$a = shortcode_atts( array(
		'fit' => 'false'
		), $atts );
	return '<img '.($a["fit"] == "false" ? "" : "class=\"normalImg\" ").'src="'.get_static_uri($content).'"/>';
});

add_shortcode('link', function($atts, $content) {
	$a = shortcode_atts( array(
		'style' => ''
		), $atts );
	return '<a '.($a["style"] != "" ? "style=\"".$a["style"]."\"" : "").' href="'.$atts["to"].'">'.$content.'</a>';
});

add_shortcode('social', function($atts, $content) {
	return '<div>'.do_shortcode($content).'</div>';
});

add_shortcode('facebook', function($atts, $content) {
	return '<img 
	src="'.get_static_uri("facebook_icon.png").'"/>';
});

add_shortcode('twitter', function($atts, $content) {
	return '<img 
	src="'.get_static_uri("twitter_icon.png").'"/>';
});

add_shortcode('button', function($atts, $content) {
	return '<a class="btn" href="'.$atts["to"].'">'.$content.'</a>';
});

add_shortcode('menuTitle', function($atts, $content) {
	return '<h2 class="menuTitle">'.$content.'</h2>';
});

add_shortcode('menuItem', function($atts, $content) {
	$a = shortcode_atts( array(
		'name' => 'Menu Item',
		'description' => '',
		'price' => '0'
		), $atts );

	return include(locate_template('content-menuItem.php'));
});

add_shortcode('item', function($atts, $content) {
	$a = shortcode_atts( array(
		'title' => 'Item Title',
		'content' => 'Item Content'
		), $atts );

	return include(locate_template('content-collapsible.php'));
});
?>
