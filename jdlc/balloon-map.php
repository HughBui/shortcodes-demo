<div id="balloonMap">
<?php
	$templateDir = get_site_url();
	$balloons = array (
	    array("x" => "5.5", 	"y" => "70",	"text" => "SHRIMP", 			"link" => $templateDir."/sensitive-high-resolution-ion-micro-probe-facility-shrimp/"),
	    array("x" => "24.8",	"y" => "75.5",	"text" => "JdLC Directorate",	"link" => $templateDir.""),
	    array("x" => "30",		"y" => "68.5",	"text" => "TIMS", 				"link" => $templateDir."/thermal-ionization-mass-spectrometry-facility-tims/"),
	    array("x" => "33.5",	"y" => "62.5",	"text" => "XSAF", 				"link" => $templateDir."/x-ray-surface-analysis-facility-xsaf/"),
	    array("x" => "39.5",	"y" => "35",	"text" => "SAXS",				"link" => $templateDir."/small-angle-x-ray-scattering-facility-saxs/"),
	    array("x" => "51",		"y" => "40",	"text" => "DMH",				"link" => $templateDir."/digital-mineralogy-hub-facility-dmh/"),
	    array("x" => "54.5",	"y" => "32.5",	"text" => "MMF",				"link" => $templateDir."/microscopy-and-microanalysis-facility-mmf/"),
	    array("x" => "61.5",	"y" => "24.5",	"text" => "GAP",				"link" => $templateDir."/geoscience-atom-probe-facility-gap/"),
	    array("x" => "77",		"y" => "20",	"text" => "CEG",				"link" => $templateDir."/curtin-experimental-geochemistry-facility-ceg/"),
	    array("x" => "80",		"y" => "10",	"text" => "GHF",				"link" => $templateDir."/geohistory-facility-ghf/"),
	    array("x" => "86",		"y" => "2.5",	"text" => "SMS",				"link" => $templateDir."/selfrag-mineral-separation-facility-sms/"),
	    array("x" => "86.7",	"y" => "47",	"text" => "WAAIF",				"link" => $templateDir."/western-australian-argon-isotope-facility-waaif/"),
	    array("x" => "77",	"y" => "60",	"text" => "TRACE<br/>Bldg.206",		"link" => $templateDir."/trace-research-advanced-clean-environment-facility-trace/"),
	    array("x" => "77",	"y" => "70",	"text" => "WA-OIG<br/>Bldg.500",	"link" => $templateDir."/wa-organic-and-isotope-geochemistry-facility-wa-oig/"),
	);
	for ($i = count($balloons)-1; $i >= 0 ; $i--) { 
?>
	<span style="left: <?php echo $balloons[$i]["x"]; ?>%; top: <?php echo $balloons[$i]["y"]; ?>%;">
		<img class="balloon" src="<?php echo ($i == 1 ? get_static_uri('yellow-balloon.png') : get_static_uri('balloon.png')); ?>" 
		onmouseenter="showTag(<?php echo count($balloons)-1-$i; ?>)" onmouseout="hideTag(<?php echo count($balloons)-1-$i; ?>)"
		onclick="window.location.href ='<?php echo $balloons[$i]["link"]; ?>';"/>
		<div class="tag" style="background-image: url(<?php echo get_static_uri('tag.png'); ?>); background-repeat: no-repeat;">
			<?php echo $balloons[$i]["text"]; ?>
		</div>
	</span>
<?php } ?>
</div>