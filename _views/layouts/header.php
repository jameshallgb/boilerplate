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

                <div id="header-nav" class="main-nav-container justify-end flex grow z-30">

                    <div class="menu-animate xl:hidden">
                        
                        <div class="menu-animated-layer layer-one fixed h-full top-0 right-0 bg-white translate-x-full" style="z-index: -1; width: calc(100vw - 35vw)"></div>
                    
                        <div class="menu-animated-layer layer-two fixed h-full top-0 right-0 bg-slate-500 translate-x-full" style="z-index: -2; width: calc(100vw - 29vw);"></div>
                    
                        <div class="menu-animated-layer layer-three fixed h-full top-0 right-0 bg-slate-900 translate-x-full" style="z-index: -3; width: calc(100vw - 22vw);"></div>
                        
                    </div>

                    <div class="flex-banner flex justify-end flex-fill items-center space-x-5 order-last">
            
                        <?php
                    
                        $banner_button_text = get_theme_mod( 'banner_button_text' ); 
                        $banner_button_link = get_theme_mod( 'banner_button_link' ); 

                        if (!empty($banner_button_text)){ ?>
                
                            <a class="button" href="<?php echo $banner_button_link; ?>"><?php echo $banner_button_text; ?></a>

                        <?php } ?>
                        
                        <button class="navbar-toggler xl:hidden" type="button" data-target="#primary-nav" aria-expanded="false" aria-label="Toggle navigation">
                        
                            Open
                        
                        </button>
                    
                    </div>

                    <div class="navbar-collapse collapse justify-center grow hidden xl:flex">

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