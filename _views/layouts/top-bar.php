<?php

/**
 * Get Top Bar
 * 
 */

    if( get_theme_mod('show_top_bar') ) {
    
        $first_col = get_theme_mod( 'top_bar_first_col' );
        $second_col = get_theme_mod( 'top_bar_second_col' );
        $third_col = get_theme_mod( 'top_bar_third_col' ); ?>

            <div class="top-bar flex items-center py-2">

                <div class="container flex justify-between text-white">

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

    <?php } ?>