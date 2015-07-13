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
          <span><a href="<?php get_permalink( get_page_by_path('staff_portal') ); ?>">STAFF PORTAL</a></span>
          <span><a href="<?php get_permalink( get_page_by_path('links') ); ?>">LINKS</a></span>
          <span><a href="<?php get_permalink( get_page_by_path('science_links') ); ?>">SCIENCE LINKS</a></span>
          <span><a href="<?php get_permalink( get_page_by_path('board_of_directors') ); ?>">BOARD OF DIRECTORS</a><span>
        </div>
      </div>
      <div class="social">
        <!-- section 3 -->
        <div>
          <span>Connect to us Via social:</span>
          <span class="social-links">
          <span class="social-linkedin"><a href=""><img src="<?php echo get_static_uri('social-linkedin.png'); ?>"></img></a></span>
          <span class="social-twitter"><a href=""><img src="<?php echo get_static_uri('social-twitter.png'); ?>"></img></a></span>
          <span class="social-youtube"><a href=""><img src="<?php echo get_static_uri('social-youtube.png'); ?>"></img></a></span>
        </div>
      </div>
    </div>
  </div>
  <div class="gramercy-footer">
    <div class="gramercy-footer-container">
      <div class="credit">
        <span class="tagline">Designed By
          <a class="gramercy-link" href="http://www.gramercystudios.com">
            <span class="gramercy-icon"></span>
            <span class="gramercy-logo"></span>
          </a>
        </span>
      </div>
      <div class="copyright">
        <span class="copyright">Copyright 2015 | John de Laeter Center</span> 
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