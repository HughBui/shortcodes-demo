<?php get_template_part('head'); ?>
<body>
	<div id="wrapper">
		<div id="header-index" style="<?php echo jdlc_gradient_css('rgba(93,68,110,1)', 'white', 'sweet'); ?>">
			<?php get_template_part('menu'); ?>
			<div id="map" class="feature-image" style="background-image: url(<?php echo get_static_uri('home_building.png'); ?>);">
				<?php 
				$lbID = jdlc_generate_html_id();
				$btn = '[lightbox_launcher id="'.$lbID.'" class="play_button"]<img src="'.get_static_uri('play-button.png').'" /><span>Inside JDL Centre</span>[/lightbox_launcher]';
				$btn .= '[lightbox id="'.$lbID.'"]'.lightbox_content_helper_youtube("https://www.youtube.com/embed/NS1JMYco8XA").'[/lightbox]';
				echo parse_shortcode_content($btn);
				get_template_part('balloon-map');
				?>
			</div>
			<div class="heading_text">
				John de Laeter Centre is a collaborative research venture involving Curtin University,
				The University of Western Australia, the CSIRO and the geological survey of WA.
			</div>
		</div>
