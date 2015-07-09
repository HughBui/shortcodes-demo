<div class="container header sticky">
	<img id="logo" src="<?php echo get_static_uri('header_footer/jmg_logo_panel.png');?>"/>
	<label for="show-menu" class="show-menu">
		<img src="<?php echo get_static_uri('header_footer/hamburger_icon.png');?>"/>
	</label>
	<input type="checkbox" id="show-menu" role="button">

	<ul id="menu">
		<li <?php echo (stripos(the_title( '', '', FALSE ), 'Home') !== false ? "class=\"selected\"" : ""); ?>><a href="">Home</a></li>
		<li <?php echo (stripos(the_title( '', '', FALSE ), 'About Us') !== false ? "class=\"selected\"" : ""); ?>><a href="">About Us</a>	</li>
		<li <?php echo (stripos(the_title( '', '', FALSE ), 'Projects') !== false ? "class=\"selected\"" : ""); ?>><a href="">Projects</a></li>
		<li <?php echo (stripos(the_title( '', '', FALSE ), 'Services') !== false ? "class=\"selected\"" : ""); ?>><a href="">Services</a>
			<ul class="hidden">
				<li><a href="">Smartcertify</a></li>
				<li><a href="">Fire</a></li>
				<li><a href="">Safety</a></li>
				<li><a href="">BS</a></li>
			</ul>
		</li>
		<li <?php echo (stripos(the_title( '', '', FALSE ), 'Blog') !== false ? "class=\"selected\"" : ""); ?>><a href="">Blog</a></li>
		<li <?php echo (stripos(the_title( '', '', FALSE ), 'Contact') !== false ? "class=\"selected\"" : ""); ?>><a href="">Contact</a></li>
	</ul>
</div>
