<?php
print_r('
	<div class="container content '.$a["color"].($a["reservation"] == "true" ? " reservation " : "").'">
		<div class="row '.($a["narrow"] == "true" ? " narrow " : "").($a["menu"] == "true" ? " menu " : "").'">
			'.do_shortcode(str_replace(array("<br />", "<p>", "</p>"), "", $content)).'
		</div>
	</div>
	');
?>