<?php

if ( ! function_exists( 'rsvp_block_styles' ) ) {
	function rsvp_block_styles() {
        if (!is_admin()) {
            // add css lib
            wp_enqueue_style( 'budomi_72', get_stylesheet_directory_uri() . '/assets/font/Bodoni_72/stylesheet.css' );
            // wp_enqueue_style( 'helvetica_neue', get_stylesheet_directory_uri() . '/assets/font/Helvetica_Neue/stylesheet.css' );
            wp_enqueue_style( 'bootstrap_style', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
            wp_enqueue_style( 'carousel_style', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel/assets/owl.carousel.min.css' );
            wp_enqueue_style( 'carousel_theme_style', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel/assets/owl.theme.default.css' );
            wp_enqueue_style( 'main_style', get_stylesheet_directory_uri() . '/assets/css/style.css', [], "1.18" );
            // add js lib
            wp_enqueue_script('jquery_script', get_stylesheet_directory_uri() . '/assets/vendor/jquery/jquery-3.2.1.min.js', [], false, true);
            wp_enqueue_script('bootstrap_script', get_stylesheet_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [], false, true);
            wp_enqueue_script('carousel_script', get_stylesheet_directory_uri() . '/assets/vendor/owlcarousel/owl.carousel.min.js', [], false, true);
            wp_enqueue_script('main_script', get_stylesheet_directory_uri() . '/assets/js/main.js', [], "1.6", true);
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

    $headers[] = 'From: Test <no-reply@rsvp-communication.com>';
    $headers[] = 'Content-Type: text/html; charset="utf-8"';
    $body = get_email_template('quotation_email');
    $contactData = new \Mint\MRM\DataStores\ContactData($email, [
        "first_name" => $name,
        "status" => "subscribed",
    ]);

    add_subscribed_email($contactData);
    wp_mail($email, "New message from RSVP client | {$name}", $body, $headers);
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