<?php
if($colImg == ''){
	return '<div class="col col-span-'.$a["span"].' '.($a["collapsible"] == "true" ? "collapsible" : "").' '.$a["align"].'" '.($a["style"] == "" ? "" : "style=\"".$a["style"] ."\"").'>
				'.do_shortcode($content).'
			</div>
			';
}
return '<div class="col col-span-'.$a["span"].' bgDiv" style="background: url(\''.$colImg.'\') no-repeat;background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">
			'.do_shortcode($content).'
		</div>
		';
?>
