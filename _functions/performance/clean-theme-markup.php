<?php

/* Clean HTML ouput form theme, remove any unnecessary styles and scripts */




// Clean up front end, remove unused scripts and styles

add_action( 'wp_enqueue_scripts', 'remove_unused_scripts_styles', 200 );

function remove_unused_scripts_styles() {

    wp_dequeue_style('wp-block-library');

    // This also removes some inline CSS variables for colors since 5.9 - global-styles-inline-css
    wp_dequeue_style('global-styles');

    // WooCommerce - you can remove the following if you don't use Woocommerce
    wp_dequeue_style('wc-block-style');
    wp_dequeue_style('wc-blocks-vendors-style');
    wp_dequeue_style('wc-blocks-style'); 

}

