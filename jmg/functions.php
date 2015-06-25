<?php

function get_static_uri($resource){
  return get_template_directory_uri() . '/static/' . $resource;
}

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
		'color' => '',
		'header' => 'false',
		'narrow' => 'false',
		'arrow' => 'false',
		'desaturate' => 'false'
		), $atts );

	// $bgImg = $a["bg"] != '' ? get_static_uri($a["bg"]) : '';
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
		'align' => ''
		), $atts );

	$colImg = $a["bg"] != '' ? get_static_uri($a["bg"]) : '';
	return include(locate_template('content-column.php'));
});

add_shortcode('title', function($atts, $content) {
	$a = shortcode_atts( array(
		'type' => 'h2'
		), $atts );
	return '<'.$a["type"].'>'.$content.'</'.$a["type"].'>';
});

add_shortcode('separator', function($atts, $content) {
	return '<hr class="'.$atts["type"].'"/>';
});

add_shortcode('paragraph', function($atts, $content) {
	$a = shortcode_atts( array(
		'type' => '',
		'color' => ''
		), $atts );

	return '<p class="'.$a["type"].'" '.($a["color"] != "" ? "style=\"color:".$a["color"].";\"" : "").'>'.$content.'</p>';
});

add_shortcode('image', function($atts, $content) {
	$a = shortcode_atts( array(
		'fit' => 'false'
		), $atts );
	return '<img '.($a["fit"] == "false" ? "" : "class=\"normalImg\" ").'src="'.get_static_uri($content).'"/>';
});

add_shortcode('link', function($atts, $content) {
	return '<a href="'.$atts["to"].'">'.$content.'</a>';
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

?>