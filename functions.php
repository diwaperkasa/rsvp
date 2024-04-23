<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'add_custom_field_action' );

function add_custom_field_action()
{
    Container::make( 'theme_options', __( 'RSVP Options' ) )
        ->add_fields( [
            Field::make( 'text', 'rsvp_email', 'Email' ),
            Field::make( 'text', 'rsvp_facebook', 'Facebook' ),
            Field::make( 'text', 'rsvp_instagram', 'Instagram' ),
            Field::make( 'text', 'rsvp_twitter', 'X (Twitter)' ),
            Field::make( 'text', 'rsvp_linkedin', 'LinkedIn' ),
        ]);
    
    Container::make( 'post_meta', 'Editor' )
        ->where( 'post_type', '=', 'post' )
        ->where( 'post_term', '=', [
            'field' => 'slug',
            'value' => 'projects',
            'taxonomy' => 'category',
        ])
        ->add_fields( [
            Field::make( 'text', 'project_title', __( 'Title' ) ),
            Field::make( 'text', 'project_subtitle', __( 'Subtitle' ) ),
            Field::make( 'media_gallery', 'project_thumbnail', __( 'Thumbnail' ) ),
            Field::make( 'rich_text', 'project_desc', __( 'Description' ) ),
            Field::make( 'text', 'project_year', __( 'Year' ) ),
            Field::make( 'media_gallery', 'project_photo', __( 'Media Gallery' ) )
        ]);

    Container::make( 'post_meta', 'Editor' )
        ->where( 'post_type', '=', 'post' )
        ->where( 'post_term', '=', [
            'field' => 'slug',
            'value' => 'news',
            'taxonomy' => 'category',
        ])
        ->add_fields( [
            Field::make( 'image', 'thumbnail', __( 'Thumbnail' ) ),
        ]);

    Container::make( 'post_meta', 'Editor' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_name', '=', 'about')
        ->add_fields( [
            Field::make( 'image', 'thumbnail', __( 'Thumbnail' ) ),
            Field::make( 'rich_text', 'title', __( 'Title' ) ),
            Field::make( 'rich_text', 'description', __( 'Description' ) ),
        ]);
}

add_action( 'after_setup_theme', 'crb_load' );

function crb_load()
{
    require_once( __DIR__ . '/../../../vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

if ( ! function_exists( 'rsvp_block_styles' ) ) {
	function rsvp_block_styles() {
        if (!is_admin()) {
            // add css lib
            wp_enqueue_style( 'budomi_72', get_stylesheet_directory_uri() . '/assets/font/Bodoni_72/stylesheet.css' );
            // wp_enqueue_style( 'helvetica_neue', get_stylesheet_directory_uri() . '/assets/font/Helvetica_Neue/stylesheet.css' );
            wp_enqueue_style( 'bootstrap_style', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
            wp_enqueue_style( 'carousel_style', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel/assets/owl.carousel.min.css' );
            wp_enqueue_style( 'carousel_theme_style', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel/assets/owl.theme.default.css' );
            wp_enqueue_style( 'main_style', get_stylesheet_directory_uri() . '/assets/css/style.css', [], "1.7" );
            // add js lib
            wp_enqueue_script('jquery_script', get_stylesheet_directory_uri() . '/assets/vendor/jquery/jquery-3.2.1.min.js', [], false, true);
            wp_enqueue_script('bootstrap_script', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [], false, true);
            wp_enqueue_script('carousel_script', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel/owl.carousel.min.js', [], false, true);
            wp_enqueue_script('main_script', get_stylesheet_directory_uri() . '/assets/js/main.js', [], "1.7", true);
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
    $part = explode("/", $current_url);

    return current($part);
}

function send_quotation_email()
{
    $name = $_POST['contact_name'] ?? null;
    $email = $_POST['contact_email'] ?? null;

    if (empty($name) || empty($email)) {
        throw new \WpOrg\Requests\Exception\InvalidArgument("name or email cannot be empty");
    }

    $headers[] = "From: {$name} <{$email}>";
    $headers[] = 'Content-Type: text/html; charset="utf-8"';
    $body = get_email_template('quotation_email');
    $contactData = new \Mint\MRM\DataStores\ContactData($email, [
        "first_name" => $name,
        "status" => "subscribed",
    ]);
    $toEmail = carbon_get_theme_option('rsvp_email');

    add_subscribed_email($contactData);
    wp_mail($toEmail, "New message from RSVP client | {$name}", $body, $headers);
}

function email_subscribed()
{
    $email = $_POST['subscribed_email'] ?? null;

    if (empty($email)) {
        throw new \WpOrg\Requests\Exception\InvalidArgument("email cannot be empty");
    }

    $contactData = new \Mint\MRM\DataStores\ContactData($email, [
        "status" => "subscribed",
    ]);
    add_subscribed_email($contactData);
}

function get_email_template(string $name)
{
    ob_start();
    include "layout/component/email/{$name}.php";
    $string = ob_get_clean();
    return $string;
}

function add_subscribed_email(\Mint\MRM\DataStores\ContactData $contactData)
{
    if (!\Mint\MRM\DataBase\Models\ContactModel::is_contact_exist($contactData->get_email())) {
        \Mint\MRM\DataBase\Models\ContactModel::insert($contactData);
    }
}

function rsvp_get_prev_post()
{
    $prev = get_adjacent_post( false, "", true);

    if (empty($prev)) {
        $post = get_post();
        $categories = get_the_category($post->ID);
        $category = $categories[0];
        $args = array(
            'posts_per_page' => 1,
            'offset' => 0,
            'cat' => $category->cat_ID,
            'orderby' => 'ID',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true 
        );

        $result = new WP_Query( $args ); 
        $prev = $result->post;
    }

    return $prev;
}

function rsvp_get_next_post()
{
    $next = get_adjacent_post( false, "", false);

    if (empty($next)) {
        $post = get_post();
        $categories = get_the_category($post->ID);
        $category = $categories[0];
        $args = array(
            'posts_per_page' => 1,
            'offset' => 0,
            'cat' => $category->cat_ID,
            'orderby' => 'ID',
            'order' => 'ASC',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true 
        );

        $result = new WP_Query( $args ); 
        $next = $result->post;
    }

    return $next;
}

function rsvp_get_projects(int $limit = -1)
{
    $args = [
        'posts_per_page' => $limit,
        'orderby' => 'ID',
        'order' => 'ASC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'tax_query' => [
            [
                'field' => 'slug',
                'terms' => 'projects',
                'taxonomy' => 'category',
            ]
        ]
    ];

    $result = new WP_Query($args);

    return $result;
}

function rsvp_get_news(int $limit = -1, int $page = 1)
{
    $args = [
        'posts_per_page' => $limit,
        'paged' => max(1, $page),
        'orderby' => 'ID',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'tax_query' => [
            [
                'field' => 'slug',
                'terms' => 'news',
                'taxonomy' => 'category',
            ]
        ]
    ];

    $result = new WP_Query($args);

    return $result;
}