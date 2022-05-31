<?php

if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) {?>

    <div id="footer-widget" class="py-12">

            <div class="container">

                <div class="flex flex-col lg:flex-row space-x-5 space-y-5 lg:space-y-0">

                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div class="w-100 lg:w-1/3 text-center lg:text-left"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div class="w-100 lg:w-1/3 text-center lg:text-left"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                    <?php endif; ?>
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div class="w-100 lg:w-1/3 text-center lg:text-left"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    <?php endif; ?>

                </div>

            </div>

        </div>

<?php 

}