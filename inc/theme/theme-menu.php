<?php

//Add "parent" class to pages with subpages, change submenu class name, add depth class

class NWD_Walker extends Walker_Nav_Menu {
    
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
        
        $GLOBALS['dd_children'] = ( isset($children_elements[$element->ID]) )? 1:0;
        $GLOBALS['dd_depth'] = (int) $depth;
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
        
    }

    function start_lvl(&$output, $depth = 0, $args = NULL) {
        
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu level-".$depth."\">\n";
    
    }
  
}


add_filter('nav_menu_css_class','add_parent_css',10,2);

function  add_parent_css($classes, $item){
    
     global  $dd_depth, $dd_children;
     
     $classes[] = 'depth'.$dd_depth;
     
     if($dd_children)
     
         $classes[] = 'dropdown';
         
    return $classes;
}

//Add class to parent pages to show they have subpages (only for automatic wp_nav_menu)

add_filter( 'page_css_class', 'add_parent_class', 10, 4 );

function add_parent_class( $css_class, $page, $depth, $args ) {
    
   if ( ! empty( $args['has_children'] ) )
   
       $css_class[] = 'dropdown';
       
   return $css_class;
}





