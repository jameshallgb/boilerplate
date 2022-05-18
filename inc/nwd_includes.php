<?php

/**
 * NWD_Theme functions and definitions
 */

if ( ! function_exists( 'nwd_theme_setup' ) ) :
    
    /**
     * Set up NWD_Theme defaults and registers support for core features.
     */
     
    function nwd_theme_setup() {
        
    	// Enable translation
    	load_theme_textdomain( 'nwd-theme', get_template_directory() . '/languages' );
    
        // Add posts and comments RSS feed links.
    	add_theme_support( 'automatic-feed-links' );
    
    	// Enable document titles.
    	add_theme_support( 'title-tag' );
    
    	// Enable thumbnails.
    	add_theme_support( 'post-thumbnails' );
    
    	// Set theme nav locations.
    	register_nav_menus( array(
    		'primary' => esc_html__( 'Primary', 'nwd-theme' ),
    		'top_bar' => esc_html__( 'Top bar', 'nwd-theme' ),
    	) );
    
    	// Switch default core markup.
    	add_theme_support( 'html5', array(
    		'comment-form',
    		'comment-list',
    		'caption',
    	) );
    
    	// Set up the core custom background feature.
    	add_theme_support( 'custom-background', apply_filters( 'nwd_theme_custom_background_args', array(
    		'default-color' => 'ffffff',
    		'default-image' => '',
    	) ) );
    
    	// Add support for selective refresh for widgets.
    	add_theme_support( 'customize-selective-refresh-widgets' );
    
        function nwd_theme_add_editor_styles() {
            add_editor_style( 'custom-editor-style.css' );
        }
        add_action( 'admin_init', 'nwd_theme_add_editor_styles' );
    
    }
    
endif;

add_action( 'after_setup_theme', 'nwd_theme_setup' );







/**
 * Admin
 */

    // Implement the Custom Admin feature.extend
    require get_template_directory() . '/inc/admin/admin-functions.php';




/**
 *  Posts
 */

    // Add custom meta to pages.
    require get_template_directory() . '/inc/posts/custom-meta.php';

    // Add custom post types.
    require get_template_directory() . '/inc/posts/custom-post-types.php';




/**
 *  Widgets
 */

    // Set widget areas.
    require get_template_directory() . '/inc/widgets/widget-areas.php'; 

    // Add widget attributes.
    require get_template_directory() . '/inc/widgets/widget-attributes.php'; 




 /**
 *  Templates
 */   
    
    // Custom template tags for this theme.
    require get_template_directory() . '/inc/templates/template-tags.php';
    
    // require get_template_directory() . '/inc/templates/template-functions.php';

    // Custom functions that act independently of the theme templates.
    // Set Header classes ( have to check / test ).
    require get_template_directory() . '/inc/templates/extras.php';




 /**
 *  Theme
 */  

    // Implement theme menu.
    require get_template_directory() . '/inc/theme/theme-menu.php';

    // Get theme elements.
    require get_template_directory() . '/inc/theme/theme-elements.php';




 /**
 *  Appearance
 */  

    // Customizer additions.
    require get_template_directory() . '/inc/appearance/customizer.php';
    
    // Implement Header Image in customizer.
    require get_template_directory() . '/inc/appearance/header-image.php';

    // Generate critical CSS.
    require get_template_directory() . '/inc/appearance/critical-css.php';

    // Enqueue scripts and styles.
    require get_template_directory() . '/inc/appearance/enqueue-scripts.php';




 /**
 *  Performance
 */  

    // Customizer additions.
    require get_template_directory() . '/inc/performance/clean-theme-markup.php';




/**
 * Compatibility
 */

    // Load plugin compatibility file.
    require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

