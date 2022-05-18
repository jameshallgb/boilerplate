<?php



/**
 * Register widget area.
 */

function nwd_theme_widgets_init() {
    
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'nwd' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'nwd' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'nwd' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'nwd' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s d-flex justify-content-center ">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title text-center text-md-left">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'nwd' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'nwd' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title text-center text-md-left">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'nwd' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'nwd' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title text-center text-md-left">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'nwd_theme_widgets_init' );