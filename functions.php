<?php

if ( ! isset( $content_width) )
    $content_width = 654;

// Add WordPress menu functionality (instead of hard-coding)
function register_menu() {
    register_nav_menu('primary-nav', __( 'Primary Nav'));
}

add_action( 'init', 'register_menu' );

// Filter wp_nav_menu() to add Home link to primary nav menu
function new_nav_menu_items($items) {
    $homelink = '<li class="menu-item"><a href="' . home_url( '/' ) . '">' . __('Home') . '</a></li>';
    $items = $homelink . $items;
    return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items' );


function get_header_string( $is_home, $blog_string, $site_url ) {
    if ( $is_home ) {
        $header_string = $blog_string;
    } else {
        $header_string = "<a href=\"" . $site_url . "\">" . $blog_string . "</a>";
    }
    return $header_string;
}

// PRISM.JS Functions
// ==================

// Function to add prism.css and prism.js to the site
function add_prism() {

// Register prism.css file
wp_register_style(
'prismCSS', // handle name for the style so we can register, de-register, etc.
get_stylesheet_directory_uri() . '/inc/prism.css' // location of the prism.css file
);

// Register prism.js file
wp_register_script(
'prismJS', // handle name for the script so we can register, de-register, etc.
get_stylesheet_directory_uri() . '/inc/prism.js' // location of the prism.js file
);

// Enqueue the registered style and script files
wp_enqueue_style('prismCSS');
wp_enqueue_script('prismJS');
}
add_action('wp_enqueue_scripts', 'add_prism');
?>