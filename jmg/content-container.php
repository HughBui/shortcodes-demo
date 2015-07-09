<?php
if(count($bgImages) == 0){
	print_r('
		<div class="container content '.($a["post"] == "true" ? "post" : "").($a["grid"] == "true" ? "grid" : "").' '.($a["dark"] == "true" ? "dark" : "").'">
			<div class="row '.($a["narrow"] == "true" ? "narrow" : "").'">
				'.do_shortcode(str_replace(array("<br />", "<p>", "</p>"), "", $content)).'
			</div>
			'.($a["arrow"] == "true" ? "<div class=\"arrow\"></div>" : "").'
		</div>
		');
}else if($a["desaturate"] == "false"){
	$carousel = count($bgImages) == 1 ? '' : '<span style="position:relative; bottom: -50px; top: 50px;">';
	if(count($bgImages) > 1){
		for($i = 0; $i < count($bgImages) ; $i++){
			$carousel .= '
			<input type="hidden" class="headerImage" value="'.$bgImages[$i].'"/>
			<svg height="40" width="40" style="z-index: 2; cursor: pointer;" onclick="return changeHeaderImage('.$i.')">
				<circle cx="20" cy="20" r="10" stroke="grey" stroke-width="1" fill="'.($i == 0 ? "white" : "rgba(240,240,240, 0.3)").'" />
			</svg>
			';
		}
	}
	$carousel .= count($bgImages) == 1 ? '' : '</span>';
	print_r('
		<div id="carousel" class="container content '.($a["header"] == "true" ? "header" : "").' bgDiv" style="background: url(\''.$bgImages[0].'\') no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-position: center center;">
			<div class="row '.($a["narrow"] == "true" ? "narrow" : "").'">
				'.substr(do_shortcode(str_replace(array("<br />", "<p>", "</p>"), "", $content)),0,-11).$carousel.'
				</div>
			</div>
			'.($a["arrow"] == "true" ? "<div class=\"arrow\"></div>" : "").'
		</div>
	');
}else{
	print_r('
		<div id="bgDiv" class="container content '.($a["header"] == "true" ? "header" : "").' bgDiv">
			<svg xmlns="http://www.w3.org/2000/svg" id="svgroot" width="100%" height="100%">
				<defs>
					<filter id="filtersPicture">
						<feComposite result="inputTo_38" in="SourceGraphic"
						in2="SourceGraphic" operator="arithmetic" k1="0" k2="1" k3="0"
						k4="0" />
						<feColorMatrix id="filter_38" type="saturate" values="0"
						data-filterid="38" />
					</filter>
				</defs>
				<image id="img" filter="url(&quot;#filtersPicture&quot;)"
				xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="'.$bgImages[0].'" />
			</svg>
			<div class="row narrow">
				'.do_shortcode(str_replace(array("<br />", "<p>", "</p>"), "", $content)).'
			</div>
			'.($a["arrow"] == "true" ? "<div class=\"arrow\"></div>" : "").'
		</div>
	');
}
?>
