<div class="menu">
<a href="<?php echo get_home_url(); ?>">
<div class="logo" style="background-image: url(<?php echo get_static_uri('jdlc-logo-top.png'); ?>);">
</div>
</a>
<div id="burger-part" class="menu-items">
	<img id="burger" src="<?php echo get_static_uri('hamburger_icon.png');?>" onclick="toggleMenu()" />
</div>
<div id="menu-part" class="menu-items">
  <span class="selected"><a href="<?php echo get_permalink(get_page_by_path('facilities')); ?>">FACILITIES</a></span>
  <span><a href="<?php echo get_permalink(get_page_by_path('instruments')); ?>">INSTRUMENTS</a></span>
  <span><a href="<?php echo get_permalink(get_page_by_path('research')); ?>">RESEARCH</a></span>
  <span class="contact-button"><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">CONTACT</a></span>
</div>
</div>
