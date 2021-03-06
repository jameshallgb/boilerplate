<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NWD_THEME
 */


if ( ! is_active_sidebar( 'main-sidebar' ) ) {
    
	return;
	
    }   ?>

    <aside id="secondary" class="widget-area col-sm-12 col-lg-4 py-4 pl-xl-4" role="complementary">
    
       <?php dynamic_sidebar( 'main-sidebar' );  ?>
       
    </aside>
