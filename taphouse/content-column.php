<?php
if($colImg == ''){
	return '<div class="col col-span-'.$a["span"].($a["left"] == "true" ? " no-padding" : "").'">
				'.do_shortcode($content).'
			</div>
			';
}
return '<div class="col col-span-'.$a["span"].($a["left"] == "true" ? " no-padding" : "")
		.' bgDiv" style="background: url(\''.$colImg.'\') no-repeat;
		background-size: cover;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;
		'.($a["link"] == "" ? "" : " cursor: pointer;").'" 
		'.($a["link"] == "" ? "" : "onclick=\"location.href='".$a["link"]."'\"").'>
			'.do_shortcode($content).'
		</div>
		';
?>