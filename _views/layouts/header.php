<?php

/**
 * Get Header
 * 
 */     ?>
 
    <header id="masthead" class="site-header bg-white navbar-static-top mb-0 m-auto py-5 z-10 shadow-md">

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

                <div id="header-nav" class="main-nav-container w-6/12 justify-end flex grow z-30">

                    <div class="menu-animate xl:hidden">
                        
                        <div class="menu-animated-layer layer-one w-6/12 fixed h-full top-0 right-0 bg-white translate-x-full transition-all duration-500" style="z-index: -1;"></div>
                    
                        <div class="menu-animated-layer layer-two w-7/12 fixed h-full top-0 right-0 bg-slate-500 translate-x-full transition-all duration-500" style="z-index: -2;"></div>
                    
                        <div class="menu-animated-layer layer-three w-8/12 fixed h-full top-0 right-0 bg-slate-900 translate-x-full transition-all duration-500" style="z-index: -3;"></div>
                        
                    </div>

                    <div class="flex-banner flex justify-end flex-fill items-center space-x-5 order-last transition-all duration-500">
            
                        <?php
                    
                        $banner_button_text = get_theme_mod( 'banner_button_text' ); 
                        $banner_button_link = get_theme_mod( 'banner_button_link' ); 

                        if (!empty($banner_button_text)){ ?>
                
                            <a class="button" href="<?php echo $banner_button_link; ?>"><?php echo $banner_button_text; ?></a>

                        <?php } ?>
                        
                        <button class="navbar-toggler xl:hidden" type="button" data-target="#primary-nav" aria-expanded="false" aria-label="Toggle navigation">
                        
                            <span class="toggler-closed">Open</span>

                            <span class="toggler-open">Close</span>
                        
                        </button>
                    
                    </div>

                    <div class="navbar-collapse collapse justify-center grow hidden xl:flex translate-x-full xl:translate-x-0 transition-all duration-500 mt-10 xl:mt-0">

                        <?php
                        
                            wp_nav_menu(array(
                                'theme_location'    => 'primary',
                                'container'       => 'ul',
                                'container_id'    => 'primary-nav',
                                'menu_id'         => false,
                                'menu_class'      => 'navbar-nav xl:flex justify-center items-center',
                                'depth'           => 3,
                                'walker'        => new NWD_Walker()
                            ));
                        
                        ?>

                    </div>

                </div>

            </nav>

        </div>
    
   </header>