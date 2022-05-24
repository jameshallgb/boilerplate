<?php

/**
 * Get Header
 * 
 */     ?>
 
    <header id="masthead" class="site-header navbar-static-top mb-0 m-auto py-2">

        <div class="container">
        
            <nav class="navbar navbar-expand-xl flex items-center">
                
                <div class="flex-logo">
                
                    <?php if ( get_theme_mod( 'nwd_theme_logo' ) ): ?>
                    
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            
                            <img class="main-logo" src="<?php echo esc_url(get_theme_mod( 'nwd_theme_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            
                        </a>
                        
                    <?php else : ?>
                    
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        
                    <?php endif; ?>

                </div>

                <div id="header-nav" class="main-nav-container flex grow">

         

                    <div class="menu-animate d-xl-none">
                        
                        <div class="menu-animated-layer fixed h-full bg-white layer-one" style="z-index: -1; width: calc(100vw - 35vw); top: 0; right: 0;"></div>
                    
                        <div class="menu-animated-layer fixed m-auto br theme-bg layer-two" style="z-index: -2; height: 94%; width: calc(100vw - 29vw); top: 0; right: 0; background-color: #a1e7fd;"></div>
                        
                        <div class="menu-animated-layer fixed m-auto br theme-bg-dark layer-three" style="z-index: -3; height: 98%; width: calc(100vw - 22vw); top: 0; right: 0; background-color: #3128ff;"></div>
                        
                    </div>

 

                    <div class="flex-banner flex justify-end flex-fill items-center order-last">
            
                        <?php
                    
                        $banner_button_text = get_theme_mod( 'banner_button_text' ); 
                        $banner_button_link = get_theme_mod( 'banner_button_link' ); 

                        if (!empty($banner_button_text)){ ?>
                
                            <a class="button" href="<?php echo $banner_button_link; ?>"><?php echo $banner_button_text; ?></a>

                        <?php } ?>
                        
                        <button class="navbar-toggler lg:hidden" type="button" data-target="#primary-nav" aria-expanded="false" aria-label="Toggle navigation">
                        
                            <i class="fa-solid fa-bars"></i>
                        
                        </button>
                    
                    </div>

                    <div class="navbar-collapse collapse justify-center grow hidden lg:flex">

                        <?php
                        
                            wp_nav_menu(array(
                                'theme_location'    => 'primary',
                                'container'       => 'ul',
                                'container_id'    => 'primary-nav',
                                'menu_id'         => false,
                                'menu_class'      => 'navbar-nav lg:flex justify-center',
                                'depth'           => 3,
                                'walker'        => new NWD_Walker()
                            ));
                        
                        ?>

                    </div>

                </div>

            </nav>

        </div>
    
   </header>