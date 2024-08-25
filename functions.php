<?php
// =========================================================================
// Exit if accessed directly
// =========================================================================
if (!defined('ABSPATH')) exit;

// =========================================================================
// ADMIN - CUSTOM THEME SETUP
// =========================================================================
include_once dirname(__FILE__) . '/include/plugins/admin-setup.php';

// =========================================================================
// REMOVE - Default Wordpress Posts & Comments
// =========================================================================
// include_once dirname(__FILE__) . '/include/plugins/remove-default-posts.php';
include_once dirname(__FILE__) . '/include/plugins/remove-default-comments.php';
include_once dirname(__FILE__) . '/include/plugins/remove-h1-wysiwyg.php';

// =========================================================================
// ACF - Load Custom Setup
// =========================================================================
include_once dirname(__FILE__) . '/include/plugins/acf-setup.php';

// =========================================================================
// Limpando o Header
// =========================================================================
include_once dirname(__FILE__) . '/include/plugins/clean-header.php';

// =========================================================================
// Load Theme Dependences JavaScript
// =========================================================================
function style_scripts()
{
    // Desregistra o jQuery do Wordpress
    wp_deregister_script('jquery');

    // Registra o jQuery Novo
    wp_register_script('jquery', get_template_directory_uri() . '/js/libs/jquery.js', [], "3.4.1", true);

    // Rigistra o plugin do slider
    wp_register_script('plugins-slick', get_template_directory_uri() . '/js/plugins/slick.min.js', ['jquery'], false, true);

    // Registrar Main
    wp_register_script('main-script', get_template_directory_uri() . '/js/main.js', ['jquery', 'plugins-slick'], false, true);

    // Carrega o Script	wp_enqueue_script( 'main-script' );
    wp_enqueue_script('main-script');
}
add_action('wp_enqueue_scripts', 'style_scripts');

// =========================================================================
// Load Theme Dependences CSS
// =========================================================================
function style_css()
{
    wp_register_style('main-style', get_template_directory_uri() . '/css/style.css', [], false, false);

    wp_register_style('slick', get_template_directory_uri() . '/js/plugins/slick.css', [], false, false);

    wp_enqueue_style('slick');
    wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'style_css');
