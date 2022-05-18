<?php

/* Add classes to wordpress menu widget */

function atg_menu_classes($classes, $item, $args) {

    $classes[] = 'text-center text-md-left';
  
    return $classes;
}

add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_link_atts($atts) {
    
  $atts['class'] = "text-reset d-block py-2 px-4";
  return $atts;
}

add_filter( 'nav_menu_link_attributes', 'add_link_atts');
