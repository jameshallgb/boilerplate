<?php

/*

// Our custom post type function

function nwd_create_testimonials() {
 
    register_post_type( 'custom-testimonials',

        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'testimonials'),
            'show_in_rest' => true,
 
        )
    );
}

add_action( 'init', 'nwd_create_testimonials' );


// Creating a function to create our CPT

function nwd_set_testimonials() {
 
    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'nwd' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'nwd' ),
        'menu_name'           => __( 'Testimonials', 'nwd' ),
        'parent_item_colon'   => __( 'Parent Testimonial', 'nwd' ),
        'all_items'           => __( 'All Testimonials', 'nwd' ),
        'view_item'           => __( 'View Testimonial', 'nwd' ),
        'add_new_item'        => __( 'Add New Testimonial', 'nwd' ),
        'add_new'             => __( 'Add New', 'nwd' ),
        'edit_item'           => __( 'Edit Testimonial', 'nwd' ),
        'update_item'         => __( 'Update Testimonial', 'nwd' ),
        'search_items'        => __( 'Search Testimonial', 'nwd' ),
        'not_found'           => __( 'Not Found', 'nwd' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'nwd' ),
    );
     
    $args = array(
        'label'               => __( 'testimonials', 'nwd' ),
        'description'         => __( 'Testimonials', 'nwd' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
        'taxonomies'          => array( 'genres' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    register_post_type( 'custom-testimonials', $args );
 
}
 
add_action( 'init', 'nwd_set_testimonials', 0 );

*/