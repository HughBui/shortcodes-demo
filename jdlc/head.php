<html <?php language_attributes(); ?>>
  <head>
  <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" type="text/css">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <script src="<?php echo get_template_directory_uri() ?>/script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo get_static_uri('icomoon.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo get_static_uri('gramercy.css'); ?>" type="text/css">
    <style type="text/css">
      @font-face {
        font-family: Georgia;
        src: url(<?php echo get_static_uri('Georgia/Georgia.ttf'); ?>);
        font-style: normal
      }

      @font-face {
        font-family: Grotesque;
        src: url(<?php echo get_static_uri('Brandon_Grotesque/Brandon_reg.otf'); ?>);
      }
      
      @font-face {
        font-family: Grotesque-med;
        src: url(<?php echo get_static_uri('Brandon_Grotesque/Brandon_med.otf'); ?>);
      }
  
      @font-face {
        font-family: Grotesque-blk;
        src: url(<?php echo get_static_uri('Brandon_Grotesque/Brandon_blk.otf'); ?>);
      }
      
      @font-face {
        font-family: Georgia;
        src: url(<?php get_static_uri('Georgia/Georgia\ Italic.ttf'); ?>);
        font-style: italic;
      }
    </style> 
    <?php wp_head(); ?>
  </head>
