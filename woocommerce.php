<?php
/**
 * The template for displaying Woocommerce Product
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NWD_THEME
 */

    get_header(); 

    $show_sidebar = get_theme_mod ('product_sidebar' ); ?>

    <section id="primary" class="content-area col-sm-12 col-md-12 <?php if (!empty($show_sidebar)){echo 'col-lg-8';} ?>">
        
        <main id="main" class="site-main" role="main">

            <?php woocommerce_content(); ?>

        </main><!-- #main -->
        
    </section><!-- #primary -->

<?php

    if (!empty($show_sidebar)){ 
        get_sidebar();
    }
    
    
    get_footer();
