<?php
/**
 * Emiko Golf Theme Functions
 */

// Theme setup
function emiko_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('menus');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'emiko-golf'),
        'footer'  => __('Footer Menu', 'emiko-golf'),
    ));
}
add_action('after_setup_theme', 'emiko_setup');

// Enqueue styles and scripts
function emiko_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&family=Noto+Sans+JP:wght@300;400;500&display=swap', array(), null);
    wp_enqueue_style('emiko-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('emiko-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'emiko_scripts');

// Custom image sizes
add_image_size('gallery-thumb', 600, 750, true);
add_image_size('gallery-large', 1200, 1500, true);
add_image_size('hero-bg', 1920, 1080, true);

// Remove admin bar margin
function emiko_remove_admin_bar_bump() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'emiko_remove_admin_bar_bump');
