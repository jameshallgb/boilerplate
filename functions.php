<?php

/**
 * 
 * NWD_THEME Setup
 * 
 * Get our theme function
 * 
 */
 
require get_template_directory() . '/inc/nwd_includes.php';


/**
 *   Custom fucntions can be written below
 */


/**
 *   Theme function
 * 
 */
 
/* create hooks for our theme */

function nwd_subheader_meta() {
    
	do_action('nwd_subheader_meta');
	
}





