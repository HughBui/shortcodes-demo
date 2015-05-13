<?php

add_filter( 'the_content', 'do_shortcode' );

add_shortcode('title', function($atts, $content) {
	print_r('<h2 class="caption title">'.$content.'</h2><br/>');
});

add_shortcode('paragraph', function($atts, $content) {
	print_r('
		<p class="caption grey">
			'.$content.'
		</p>
		');
});

add_shortcode('grid_layout', function($atts, $content) {
	print_r('
		<section class="listings">	
			<div class="wrapper">
				<ul class="properties_list two">
					'.do_shortcode($content).'
				</ul>
			</div>
		</section>
		');
});

add_shortcode('grid_item', function($atts, $content) {
	if ( has_shortcode( $content, 'img' ) ) { 
		return do_shortcode($content);
	}
	return '<li><div class="property_details two"><div><h1>'
		.$atts['header'].
		'</h1><p>'
		.$content.
		'</p></div></div></li>';
});

add_shortcode('img', function($atts, $content) {
	return '<li><div class="property_details two pic"><img class="'.$atts['position'].'" src="'.get_bloginfo(stylesheet_directory).'/img/'.$content.'"/></div></li>';
});

?>