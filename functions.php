<?php

define('THEME_VERSIONS', '1.0.0');

function load_styles_scripts(){
  //charge la feuille de css.
  wp_enqueue_style(
    'style_boostrap-core',
    get_template_directory_uri().'/css/bootstrap.min.css',
    array(), //list les dépendence
    THEME_VERSIONS,
    'all'
  );
  wp_enqueue_style(
    'style_main',
    get_template_directory_uri().'/style.css',
    array('style_boostrap-core'), //list les dépendence
    THEME_VERSIONS,
    'all'
  );
  //charge le JS
  wp_enqueue_script(
    'script_main',
    get_template_directory_uri().'/js/script.js',
    array('jquery'), //list les dépendence
    THEME_VERSIONS,
    TRUE //FALSE pour charger au début du fichier. TRUE pour charger à la fin.
  );
} //exit load_style_scripts

add_action('wp_enqueue_scripts', 'load_styles_scripts');

function load_admin_styles_scrypts(){ //charge des script pour l'administration
  wp_enqueue_style(
    'style_boostrap-admin-core',
    get_template_directory_uri().'/css/bootstrap.min.css',
    array(),
    THEME_VERSIONS,
    'all'
  );
} //exit load_admin_styles_scrypts

add_action('admin_init', 'load_admin_styles_scrypts');


//=========================================================================
//===================     Utilitaire    ===================================
//=========================================================================

function do_setup() {
  //support des vignettes
  add_theme_support('post-thumbnails');

  //enleve le générateur de Version
  remove_action('wp_head', 'wp_generator');

  remove_filter('the_content', 'wptexturize');

  add_theme_support('title-tag');
} //exit do_setup

add_action('after_setup_theme', 'do_setup');
