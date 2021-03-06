<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package NWD_THEME
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
    <head>
        
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        
        <script src="https://kit.fontawesome.com/6f446dcca7.js" crossorigin="anonymous"></script>

        <script src="https://cdn.tailwindcss.com"></script>

        <script>
        tailwind.config = {
            theme: {
                extend: {
                colors: {
                    clifford: '#da373d',
                }
                }
            }
            }
        </script>

        <?php wp_head(); ?>
    
    </head>

    <body <?php body_class(); ?>>
        
    <div id="page" class="site"><!-- Start Page -->
        
    	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nwd-theme' ); ?></a>
    	
        <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): 
    
        /**
         * Get Top Bar
         * 
         */
     
            if( get_theme_mod('show_top_bar') ) {
            
                $first_col = get_theme_mod( 'top_bar_first_col' );
                $second_col = get_theme_mod( 'top_bar_second_col' );
                $third_col = get_theme_mod( 'top_bar_third_col' ); ?>
    
                    <div class="top-bar d-flex align-items-center py-2">
    
                        <div class="container d-flex justify-content-between text-white">
    
                            <?php 
                            
                                if (!empty ($first_col)){ 
                                
                                    echo '<div class="column flex-auto">'.$first_col.'</div>'; 
                                    
                                }
                                
                                if (!empty ($second_col)){ 
                                
                                    echo '<div class="column flex-auto"><a href="tel:'.$second_col.'">'.$second_col.'</a></div>'; 
                                
                                }
                                
                                if (!empty ($third_col)){ 
                                
                                    echo '<div class="column flex-auto"><a href="mailto:'.$third_col.'">'.$third_col.'</a></div>'; 
                                    
                                } 
                                
                                echo nwd_social_media(); 
                             
                            ?>
    
                        </div>
    
                    </div>
    
            <?php } 
    
        /**
         * Get Header
         * 
         */     ?>
         
            <header id="masthead" class="site-header navbar-static-top mb-0 m-auto">
    
                <div class="container">
                
                    <nav class="navbar navbar-expand-xl p-0">
                        
                        <div class="flex-logo h-auto col-3 col-xl-2">
                        
                            <?php if ( get_theme_mod( 'nwd_theme_logo' ) ): ?>
                            
                                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                    
                                    <img class="main-logo w-100 p-xl-1 my-3" src="<?php echo esc_url(get_theme_mod( 'nwd_theme_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                    
                                    <img class="small-logo w-100 p-xl-1 my-3" src="https://waves.nwddev.net/wp-content/uploads/2022/05/waves-logo-small.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                                    
                                </a>
                                
                            <?php else : ?>
                            
                                <a class="site-title text-reset" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                                
                            <?php endif; ?>
    
                        </div>
    
                        <div id="main-nav" class="main-nav-container d-flex align-items-strech align-items-xl-center flex-direction-reverse flex-fill flex-xl-auto">

                            <div class="menu-animate d-xl-none">
                                
                                <div class="menu-animated-layer h-100 bg-white layer-one" style="z-index: -1; width: calc(100vw - 35vw);"></div>
                            
                                <div class="menu-animated-layer m-auto br theme-bg layer-two" style="z-index: -2; height: 94%; width: calc(100vw - 29vw);"></div>
                                
                                <div class="menu-animated-layer m-auto br theme-bg-dark layer-three" style="z-index: -3; height: 98%; width: calc(100vw - 22vw);"></div>
                                
                                
                            </div>

                            <div class="flex-banner d-flex justify-content-end flex-fill flex-xl-auto align-items-center order-last">
                    
                                <?php
                            
                                $banner_button_text = get_theme_mod( 'banner_button_text' ); 
                                $banner_button_link = get_theme_mod( 'banner_button_link' ); 
        
                                if (!empty($banner_button_text)){ ?>
                        
                                    <a class="button px-3 py-1 py-md-2 px-xl-4" href="<?php echo $banner_button_link; ?>"><?php echo $banner_button_text; ?></a>
        
                                <?php } ?>
                                
                                <button class="navbar-toggler col-3 p-0 d-flex d-xl-none justify-content-center" type="button" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
                                
                                    <i style="font-size: 1.4em" class="fa-solid fa-bars"></i>
                                    
                                    <i style="font-size: 1.4em" class="fas fa-times"></i>
                                
                                </button>
                            
                            </div>

                            <div class="navbar-collapse collapse">

                                <?php
                                
                                    wp_nav_menu(array(
                                        'theme_location'    => 'primary',
                                        'container'       => 'ul',
                                        'container_id'    => 'main-nav',
                                        'container_class' => 'collapse navbar-collapse',
                                        'menu_id'         => false,
                                        'menu_class'      => 'navbar-nav',
                                        'depth'           => 3,
                                        'walker'        => new NWD_Walker()
                                    ));
                                
                                ?>

                            </div>
        
                        </div>
    
                    </nav>
    
                </div>
            
    	   </header>
    
        <?php
    
        /**
         * Get Subheader
         * 
         */
     
        if(!get_theme_mod( 'subheader_visibility' )): 
    
            if ( has_post_thumbnail() && !is_archive() ) {
                    
    		    $thumb_id = get_post_thumbnail_id();
    			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    			$headerimg = $thumb_url_array[0];
    			    
    	    } else {    
    		    
    		    if ( has_header_image()) {  
    					       
    			    $headerimg =  get_theme_mod( 'header_image' );
    			    
    		    } else {	}
    	    }
        
            if (  is_page() || is_single() || is_home() || is_archive() ) {
                
                $remove_subheader = get_post_meta( $post->ID, 'remove_subheader', true );
    
                if( !$remove_subheader==1 ) { ?>
     
                <section class="subheader position-relative" style="<?php if (!empty($headerimg)){ echo 'background-image: url('.$headerimg.');'; } ?>">
    
                    <?php $overlay_colour = get_theme_mod( 'custom_overlay_colour' );
    
                    if ( !empty($overlay_colour) && !empty($headerimg) ) { ?>
    
                        <div class="main-overlay position-absolute h-100 w-100" style="top: 0;"></div>
                        
                    <?php } ?>
    
    
                    <div class="container subheader-content h-100 d-flex align-items-end justify-content-between position-relative">
    
    		            <?php
    		        
    		                if ( !empty($cat) ) {
    		
    		                    single_cat_title( '<h2 class="entry-title">', '</h2>' );
                            
                            } elseif ( is_single() ) {
                                            
                                the_title( '<h2 class="entry-title">', '</h2>' );
                                            
                            } elseif ( is_home() ) {
                                            
                                echo '<h2 class="entry-title">Blog</h2>';
                                            
                            } else {
                                            
                                the_title( '<h2 class="entry-title">', '</h2>' );
                                            
                            } ?>
    
                        <div class="subheader-meta" style="bottom: 0;">
    
                            <?php
        
        		            nwd_subheader_meta();
        		        
        		            if ( is_single() ) { ?>
        		        	
        		                <div class="entry-meta">
        		                
        			                <?php nwd_theme_posted_on(); ?>
        			            
        		                </div>
        		            
        		            <?php   }   ?> 
    
                        </div>
    
    		        </div>
    
                </section>	       
    
            <?php }
                }
         
            endif; ?>
    
    
        <?php
    
    
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
    		
    		    <div class="row"><!-- Start Row -->
    			    
                    <?php endif; ?>
                    
                    