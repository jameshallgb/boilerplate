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

    <aside id="secondary" class="widget-area lg:w-5/12 py-12 px-10" role="complementary">
    
       <?php dynamic_sidebar( 'main-sidebar' );  ?>
       
    </aside>
