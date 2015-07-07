<?php
return'
<div class="row nested wide-fit">
	<div class="col col-span-9 no-padding">
		<p>'.$a["name"].'</p>
		'.($a["description"] == "" ? "" : "<p class=\"small\">".$a["description"]."</p>").'
	</div>
	<div class="col col-span-1 no-padding">
		<p class="price">'.($a["publish"] == "false" ? "&nbsp;" : "\$".$a["price"]).'</p>
	</div>
</div>
';
?>
