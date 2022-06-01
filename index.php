<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NWD_THEME
 */

get_header(); ?>

    <section id="primary" class="content-area py-12 lg:w-7/12 lg:pr-5">
	    
		<main id="main" class="site-main" role="main">

		<?php

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :

			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( '_views/content/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( '_views/content/content', 'none' );

		endif; 
		
		?>

		</main><!-- #main -->

	</section><!-- #primary -->

<?php

get_sidebar();
get_footer();
