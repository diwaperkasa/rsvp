<?php

if ( ! function_exists( 'rsvp_block_styles' ) ) {
	function rsvp_block_styles() {
        if (!is_admin()) {
            // add css lib
            wp_enqueue_style( 'bootstrap_style', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
            wp_enqueue_style( 'carousel_style', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel/assets/owl.carousel.min.css' );
            wp_enqueue_style( 'carousel_theme_style', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel/assets/owl.theme.default.css' );
            wp_enqueue_style( 'main_style', get_stylesheet_directory_uri() . '/assets/css/style.css', [], "1.2" );
            // add js lib
            wp_enqueue_script('jquery_script', get_stylesheet_directory_uri() . '/assets/vendor/jquery/jquery-3.2.1.min.js', [], false, true);
            wp_enqueue_script('bootstrap_script', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [], false, true);
            wp_enqueue_script('carousel_script', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel/owl.carousel.min.js', [], false, true);
            wp_enqueue_script('main_script', get_stylesheet_directory_uri() . '/assets/js/main.js', [], [], "1.2");

        }
    }
}

add_action( 'init', 'rsvp_block_styles' );

function get_layout(string $path)
{
    $layout_name = "page/{$path}";
    include "layout/main_layout.php";
}

function get_current_url()
{
    global $wp;
    $current_url = add_query_arg( array(), $wp->request );

    return $current_url;
}