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
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap.min', get_bloginfo('stylesheet_directory') . '/js/bootstrap.min.js');
    
    /* CSS */
    wp_enqueue_style('style', get_bloginfo('stylesheet_directory') . '/css/style.css');
    wp_enqueue_style('bootstrap.min', get_bloginfo('stylesheet_directory') . '/css/bootstrap.min.css');
}

/* Theme support */
add_theme_support('post-thumbnails');

