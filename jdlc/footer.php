<div id="footer">
  <div class="jdlc-footer">
    <div class="jdlc-footer-container">
      <div class="contact">
        <!-- section 1 -->
        <span><img class="logo" src="<?php echo get_static_uri('jdlc-logo-top.png'); ?>"></img></span>
        <span class="address_line_1">Building 301, Curtin University.</span>
        <span class="address_line_2">Bentley, 6845. WESTERN AUSTRALIA</span>
      </div>
      <div class="site-map">
        <!-- section 2 -->
        <div class="site-links">
          <?php wp_nav_menu( array( 
            'container' => 'div',
            'container_class' => 'site-links', 
            'theme_location' => 'footer', 
            'items_wrap' => '%3$s'
           ) ); ?>
        </div>
      </div>
      <div class="social">
        <!-- section 3 -->
        <div>
          <span>Connect to us Via social:</span>
          <span class="social-links">
          <span class="social-linkedin"><a target="_blank" href="http://www.linkedin.com/groups?home=&gid=6689207"><img src="<?php echo get_static_uri('social-linkedin.png'); ?>"></img></a></span>
          <span class="social-twitter"><a target="_blank" href="https://twitter.com/JDLCentre"><img src="<?php echo get_static_uri('social-twitter.png'); ?>"></img></a></span>
          <span class="social-youtube"><a target="_blank" href="https://www.youtube.com/channel/UCGHvrFPe7eq13DGZHZBF8TA"><img src="<?php echo get_static_uri('social-youtube.png'); ?>"></img></a></span>
        </div>
      </div>
    </div>
  </div>
  <div class="gramercy-footer">
    <div class="gramercy-footer-container">
      <div class="credit">
        <span class="tagline">Designed By
          <a class="gramercy-link" href="http://www.gramercystudios.com" target="_blank">
            <span class="gramercy-icon"></span>
            <span class="gramercy-logo"></span>
          </a>
        </span>
      </div>
      <div class="copyright">
        <span class="copyright">Copyright 2015 | John de Laeter Centre</span> 
      </div>
    </div>
  </div>
</div>
  
</div>
<?php wp_footer(); ?>
</div>
<div id="lightbox_background" onclick="jdlcCloseLightbox();"></div>
</body>
</html>
