<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package NWD_THEME
 */
?>
 
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    
    <head>
        
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
    
        <?php /* <script src="https://kit.fontawesome.com/6f446dcca7.js" crossorigin="anonymous"></script> */ ?>

        <?php wp_head(); ?>
    
    </head>

    <body <?php body_class(); ?>>
        
    <div id="page" class="site"><!-- Start Page -->
        
    	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'nwd-theme' ); ?></a>
    	
        <?php if ( ! is_page_template( 'blank-page.php' ) && ! is_page_template( 'blank-page-with-container.php' )):
    
            get_template_part( '_views/layouts/top-bar' );
    
            get_template_part( '_views/layouts/header' );

            get_template_part( '_views/layouts/subheader' );


        /**
         * Start main Page content
         * 
         */
         
        if ( is_page( ) ) {
    
            $under_header = get_post_meta( $post->ID, 'under_header_slider', true );
        
            if (!empty($under_header)){   ?>
        
                <div class="slider-container">
                    
    		        <?php   echo do_shortcode( ''. $under_header .'' ); ?>
    		        
    		  </div>
        
            <?php }
                    
        }
    
    ?>
        
    	<main id="content" class="site-content" role="main">
    	    
    		<div class="container">
    		
    		    <div class="md:flex"><!-- Start Row -->
    			    
                    <?php endif; ?>