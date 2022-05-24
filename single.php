<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package NWD_THEME
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-lg-8">

		<?php
		
		while ( have_posts() ) : the_post();

			get_template_part( '_views/content', get_post_format() );

			    the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
			    
				comments_template();
				
			endif;

		endwhile; // End of the loop.
		
		?>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
