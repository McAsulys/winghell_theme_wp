<!DOCTYPE html>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="nojs no-svg">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-with, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title></title>
  </head>
  <body>
      <header>
        <?php wp_nav_menu( array('theme_location' => 'main')); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
      </header>
