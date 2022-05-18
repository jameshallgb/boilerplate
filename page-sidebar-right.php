<?php
/**
 * Template Name: Page (Right Sidebar)
 */

get_header(); ?>
    
    <section id="primary" class="content-area col-sm-12 col-lg-8">

		<?php
		
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                    
                comments_template();
                    
            endif;

		endwhile; // End of the loop.
		
		?>

	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();