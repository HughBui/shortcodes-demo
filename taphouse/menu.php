<div class="col col-span-1">
	<a id="logo" href="http://whitewatertaphouse.com/"><img src="<?php echo get_static_uri('ww_logo.png');?>"/></a>
	<a id="logoSmall" href="http://whitewatertaphouse.com/"><img src="<?php echo get_static_uri('logo_small.png');?>"/></a>
	<ul id="taphouse">
		<li>WHITE WATER TAPHOUSE</li>
	</ul>
	<div id="taphouseFading"></div>
	<img id="burger" src="<?php echo get_static_uri('hamburger_icon.png');?>" onclick="toggleMenu()" />
	<ul id="menu">
		<li <?php echo (stripos(the_title( '', '', FALSE ), 'TAPLIST') !== false ? "class=\"menuItem selected\"" : "class=\"menuItem\""); ?>>
			<a <?php echo (stripos(the_title( '', '', FALSE ), 'TAPLIST') !== false ? "" : "onmouseenter=\"enterItem(0)\" onmouseout=\"leaveItem(0)\""); ?> 
			href="http://whitewatertaphouse.com/taplist/">TAPLIST</a>
		</li>
		<li <?php echo (stripos(the_title( '', '', FALSE ), 'INFUSIONS') !== false ? "class=\"menuItem selected\"" : "class=\"menuItem\""); ?>>
			<a <?php echo (stripos(the_title( '', '', FALSE ), 'INFUSIONS') !== false ? "" : "onmouseenter=\"enterItem(1)\" onmouseout=\"leaveItem(1)\""); ?> 
			href="http://whitewatertaphouse.com/wine-and-infusions/">WINE & INFUSIONS</a>
		</li>
		<li <?php echo (stripos(the_title( '', '', FALSE ), 'CONTACT') !== false ? "class=\"menuItem selected\"" : "class=\"menuItem\""); ?>>
			<a <?php echo (stripos(the_title( '', '', FALSE ), 'CONTACT') !== false ? "" : "onmouseenter=\"enterItem(2)\" onmouseout=\"leaveItem(2)\""); ?> 
			href="http://whitewatertaphouse.com/contact/">CONTACT</a>
		</li>
	</ul>
</div>