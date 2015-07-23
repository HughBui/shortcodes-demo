<?php get_template_part('head'); ?>
<body>
<div id="wrapper">
<div id="header-contact" style="<?php echo jdlc_gradient_css('rgba(80,70,140,0.9)', 'rgba(80,70,140,0.9)', get_static_uri('Contact-image.jpg')); ?>">
<?php get_template_part('menu'); ?>
<div class="map-pin">
  <img src="<?php echo get_static_uri('contact-pin.png') ?>">
  <div class="map-label">BUILDING 301 CURTIN UNIVERSITY, BENTLEY.</br>WESTERN AUSTRALIA 6845.</div>
</div>

<div class="header-content">
  <a class="map-button" href="https://goo.gl/maps/un4jY" target="_blank">
    <img class="map-icon" src="<?php echo get_static_uri('gmaps-icon.png') ?>">
    <span class="map-icon-label">VIEW MAP</span>
  </a>
</div>
</div>
