<?php

function load_style_scripts(){
  //charge la feuille de css.
  wp_enqueue_style('load_style_custom', get_template_directory_uri().'/style.css', array(), "1.0.0", 'all');
  //wp_enqueue_style('load_style_boostrap-core', get_template_directory_uri().'/css/bootstrap.min.css', array(), "1.0.0", 'all');
} //exit load_style_scripts

add_action('wp_enqueue_script', 'load_style_scripts');

 ?>
