<?php
/**
 * Avalon functions
 * 
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
add_action('wp_enqueue_scripts', 'avalon_init');

function avalon_init() {
    /* JS */
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6');
    wp_enqueue_script('bootstrap-select.min', get_template_directory_uri() . '/js/bootstrap-select.min.js', array('jquery'));
    wp_enqueue_script('avalon', get_template_directory_uri() . '/js/avalon.js', array('jquery', 'bootstrap.min', 'bootstrap-select.min'));

    /* CSS */
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', '3.3.6');
    wp_enqueue_style('bootstrap-select.min', get_template_directory_uri() . '/css/bootstrap-select.min.css');
//    wp_enqueue_style('jquery-ui.min', get_template_directory_uri() . '/css/jquery-ui.min.css');

    /* Fonts */
    wp_enqueue_style('GoogleUbuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:400,700,300,500&subset=latin,cyrillic-ext');
}

/**
 * Theme support
 * @since Avalon 1.0
 */
function avalon_theme_setup() {
    add_theme_support('post-thumbnails', array('post'));
    add_theme_support('custom-header');
}

add_action('after_setup_theme', 'avalon_theme_setup');

/**
 * Register menus
 * @since Avalon 1.0
 */
register_nav_menus(array(
    'primary' => __('Primary Menu', 'avalon'),
));

/**
 * Theme support menu.
 * @since Avalon 1.0
 */
add_action('admin_menu', avalon_theme_support);
function avalon_theme_support() {
    if (function_exists('add_options_page')) {
        add_menu_page('Theme support', 'Theme support', 'manage_options', 'avalon_themesupport', 'avalon_themesupport', '', 61);
    }
}

function avalon_themesupport() {
    include TEMPLATEPATH . '/theme-support/theme-support.php';
}

/**
 * Registers a widget area.
 * @since Avalon 1.0
 */
function avalon_widgets_init() {
    register_sidebar(array(
        'name' => __('Content Bottom', 'avalon'),
        'id' => 'sidebar-footer',
        'description' => __('Appears at the bottom of the content on all pages.', 'avalon'),
        'before_widget' => '<div id="%1$s" class="widget col-md-4 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Sidebar Left', 'avalon'),
        'id' => 'sidebar-left',
        'description' => __('Appears at the left side of the content on all pages.', 'avalon'),
        'before_widget' => '<div id="%1$s" class="widget col-md-4 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Sidebar Right', 'avalon'),
        'id' => 'sidebar-right',
        'description' => __('Appears at the right side of the content on all pages.', 'avalon'),
        'before_widget' => '<div id="%1$s" class="widget col-md-4 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'avalon_widgets_init');

function avalon_registration_redirect($registration_redirect) {
    return site_url();
}

add_filter('registration_redirect', 'avalon_registration_redirect');

function avalon_contact_us() {
    
}
