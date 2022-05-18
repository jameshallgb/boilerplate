<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package NWD_THEME
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses nwd_theme_header_style()
 */

function nwd_theme_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'nwd_theme_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'fff',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
	) ) );
}
add_action( 'after_setup_theme', 'nwd_theme_custom_header_setup' );
