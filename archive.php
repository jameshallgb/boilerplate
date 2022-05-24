<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NWD_THEME
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8 py-4">

		<?php
		if ( have_posts() ) : ?>

			<?php
			
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
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
