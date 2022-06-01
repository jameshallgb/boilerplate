<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NWD_THEME
 */

get_header(); ?>

	<section id="primary" class="content-area py-12 lg:w-7/12 lg:pr-5">

		<?php
		if ( have_posts() ) : ?>

			<?php
			
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 */
				get_template_part( '_views/content/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( '_views/content/content', 'none' );

		endif; ?>

	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
