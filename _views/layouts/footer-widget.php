<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>

    
    <div id="footer-widget" class="py-5">

            <div class="container">
                <div class="flex">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="w-100 md:w-1/3 text-center md:text-left"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="w-100 md:w-1/3 text-center md:text-left"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="w-100 md:w-1/3 text-center md:text-left"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

<?php }