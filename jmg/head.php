<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="<?php echo get_static_uri('favicon.png');?>" />
  <meta charset="<?php bloginfo('charset'); ?>" type="text/css">    
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title><?php wp_title(''); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <script src="<?php echo get_template_directory_uri() ?>/script.js" type="text/javascript"></script>
  <?php wp_head(); ?>
</head>