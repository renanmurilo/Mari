<?php
// =========================================================================
// CUSTOM THEME SETUP
// =========================================================================
add_action('after_setup_theme', 'custom_theme_setup');
function custom_theme_setup()
{
    add_theme_support('automatic-feed-links'); // Add default posts and comments RSS feed links to head.
    add_theme_support('title-tag'); // Add default title
    add_theme_support('post-thumbnails'); // Add Thumbnails Support
    add_theme_support('menus'); // Add Menu Support

    // Register Menus
    register_nav_menus(array(
        'menu-principal' => 'Menu principal do site',
        // 'institucional-menu' => 'Menu institucional do site',
        // 'servicos-menu' => 'Menu de serviços do site',
        // 'rodape-menu' => 'Menu do rodapé do site'
    ));

    // Enable support HTML5 output valid tags
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}

// =========================================================================
// Remove WP Default Roles
// =========================================================================
add_action('admin_menu', 'remove_default_roles');
function remove_default_roles()
{
    // remove_role( 'editor' );
    // remove_role( 'author' );
    // remove_role( 'contributor' );
    // remove_role( 'subscriber' );

    // remove_role( 'translator' );
    // remove_role( 'wpseo_manager' );
    // remove_role( 'wpseo_editor' );
}

// =========================================================================
// Remove WP Admin Bar on front-end
// =========================================================================
add_filter('show_admin_bar', 'my_function_admin_bar');
function my_function_admin_bar()
{
    return false;
}

// =========================================================================
// Adicionando Logo no admin do tema
// =========================================================================

function custom_login_logo()
{
    echo '<style type="text/css">
        h1 a { background-image: url(' . get_stylesheet_directory_uri() . '/images/icons/logo-admin.svg) !important; background-size: 292px!important; width: 292px!important;cursor-pointer:default!important; pointer-events:none!important }
    </style>';
}
add_action('login_head', 'custom_login_logo');
