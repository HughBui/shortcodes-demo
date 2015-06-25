<?php
if($a["type"] == '1'){
	print_r('
		<div class="container">
			<img class="bannerImg" 
			src="'.$bannImg.'"/>
		</div>
		');
}else{
	print_r('
		<div class="container">
			'.do_shortcode(str_replace(array("<br />", "<p>", "</p>"), "", $content)).'
			<img class ="arrowBtn left" src="'.$preImg.'"/>
			<img class ="arrowBtn right" src="'.$nextImg.'"/>
		</div>
		');
}
?>