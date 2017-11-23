<?php

function say_hello($atts, $content = null){
  extract(shortcode_atts(array(
    'name' => '',
  ), $atts));

  return 'hello everypony ! i see you '.$name;
}
add_shortcode('say_hello', 'say_hello');

register_nav_menus(array(
  'main' => "Menue Principal",
  'footer' => "Menue pied de page",
));

 ?>
