<?php
return'
<div class="row nested wide-fit">
	<div class="col col-span-9 no-padding">
		<p>'.$atts["name"].'</p>
		'.($atts["description"] == "" ? "" : "<p class=\"small\">".$atts["description"]."</p>").'
	</div>
	<div class="col col-span-1 no-padding">
		<p class="price">$'.$atts["price"].'</p>
	</div>
</div>
';
?>