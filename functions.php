<?php

/**
 * 
 * NWD_THEME Setup
 * 
 * Get our theme function
 * 
 */
 
require get_template_directory() . '/_functions/functions-controller.php';


/**
 *   Custom functions can be written below
 */

/*
function wpa54064_inspect_scripts() {
    
    global $wp_scripts;
    global $wp_styles;
    
    echo '<ul>';
    
    foreach( $wp_scripts->queue as $handle ) :
        echo '<li>'.$handle.'</li>';
    endforeach;
    
    foreach( $wp_styles->queue as $handle ) :
        echo '<li>'.$handle.'</li>';
    endforeach;
    
    echo '</ul>';
}
add_action( 'wp_head', 'wpa54064_inspect_scripts' );
*/

