
<div id="primary" class="content-area py-12">

    <?php
    
    while ( have_posts() ) : the_post();

        get_template_part( '_views/content/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            
            comments_template();
            
        endif;

    endwhile; // End of the loop.

    ?>

</div><!-- #primary -->