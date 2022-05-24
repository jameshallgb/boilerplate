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
     
                <section class="subheader relative py-10" style="<?php if (!empty($headerimg)){ echo 'background-image: url('.$headerimg.');'; } ?>">
    
                    <?php $overlay_colour = get_theme_mod( 'custom_overlay_colour' );
    
                    if ( !empty($overlay_colour) && !empty($headerimg) ) { ?>
    
                        <div class="main-overlay absolute h-full w-100" style="top: 0;"></div>
                        
                    <?php } ?>
    
                    <div class="subheader-content relative container flex items-end justify-between h-full">
    
    		            <?php
    		        
    		                if ( !empty($cat) ) {
    		
    		                    single_cat_title( '<h2 class="entry-title m-0">', '</h2>' );
                            
                            } elseif ( is_single() ) {
                                            
                                the_title( '<h2 class="entry-title m-0">', '</h2>' );
                                            
                            } elseif ( is_home() ) {
                                            
                                echo '<h2 class="entry-title m-0">Blog</h2>';
                                            
                            } else {
                                            
                                the_title( '<h2 class="entry-title m-0">', '</h2>' );
                                            
                            } ?>
    
                        <div class="subheader-meta">
    
                            <?php
        		        
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