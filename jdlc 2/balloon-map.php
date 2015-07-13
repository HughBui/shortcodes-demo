<div id="balloonMap">
<?php
	$balloons = array (
	    array("x" => "5.5", 	"y" => "70",	"text" => "SHRIMP", 			"link" => "https://www.google.com/"),
	    array("x" => "24.8",	"y" => "75.5",	"text" => "JdLC Directorate",	"link" => "https://www.google.com/"),
	    array("x" => "30",		"y" => "68.5",	"text" => "TIMS", 				"link" => "https://www.google.com/"),
	    array("x" => "33.5",	"y" => "62.5",	"text" => "XSAF", 				"link" => "https://www.google.com/"),
	    array("x" => "39.5",	"y" => "35",	"text" => "SAXS",				"link" => "https://www.google.com/"),
	    array("x" => "51",		"y" => "37",	"text" => "DMH",				"link" => "https://www.google.com/"),
	    array("x" => "54.5",	"y" => "32.5",	"text" => "MMF",				"link" => "https://www.google.com/"),
	    array("x" => "61.5",	"y" => "24.5",	"text" => "GAP",				"link" => "https://www.google.com/"),
	    array("x" => "77",		"y" => "20",	"text" => "EGF",				"link" => "https://www.google.com/"),
	    array("x" => "80",		"y" => "10",	"text" => "AGOS",				"link" => "https://www.google.com/"),
	    array("x" => "86",		"y" => "2.5",	"text" => "MinSep",				"link" => "https://www.google.com/"),
	    array("x" => "86.7",	"y" => "47",	"text" => "WAAIF",				"link" => "https://www.google.com/"),
	);
	for ($i = count($balloons)-1; $i >= 0 ; $i--) { 
?>
	<span style="left: <?php echo $balloons[$i]["x"]; ?>%; top: <?php echo $balloons[$i]["y"]; ?>%;">
		<img class="balloon" src="<?php echo get_static_uri('balloon.png'); ?>" 
		onmouseenter="showTag(<?php echo count($balloons)-1-$i; ?>)" onmouseout="hideTag(<?php echo count($balloons)-1-$i; ?>)"
		onclick="window.location.href ='<?php echo $balloons[$i]["link"]; ?>';"/>
		<div class="tag" style="background-image: url(<?php echo get_static_uri('tag.png'); ?>); background-repeat: no-repeat;">
			<?php echo $balloons[$i]["text"]; ?>
		</div>
	</span>
<?php } ?>
</div>