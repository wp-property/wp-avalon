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
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCUNObksOUAhhcLRd1qGEyL_tnypxhtPPU&libraries=places', array('jquery'));
    wp_localize_script('avalon-ajax', 'avalon_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
    wp_enqueue_script('avalon-ajax');

    /* CSS */
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('default-widgets-styles', get_template_directory_uri() . '/css/default-widgets-styles.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', '3.3.6');
    wp_enqueue_style('bootstrap-select.min', get_template_directory_uri() . '/css/bootstrap-select.min.css');

    /* Fonts */
    wp_enqueue_style('GoogleUbuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:400,700,300,500&subset=latin,cyrillic-ext');
}

add_action('admin_enqueue_scripts', 'avalon_admin_init');

function avalon_admin_init() {
    wp_enqueue_script('avalon-admin-scripts', get_template_directory_uri() . '/js/avalon-admin-scripts.js', array('jquery'), '3.3.6');
    wp_enqueue_style('avalon-admin-styles', get_template_directory_uri() . '/css/avalon-admin-styles.css');
    wp_enqueue_media();
}

/**
 * Theme support
 * @since Avalon 1.0
 */
function avalon_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
//    add_theme_support('custom-logo');
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
add_action('admin_menu', 'avalon_theme_support');

function avalon_theme_support() {
    add_menu_page('Theme support', 'Theme support', 'manage_options', 'avalon_themesupport', 'avalon_themesupport', '', 61);
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
        'name' => __('Footer widget area', 'avalon'),
        'id' => 'sidebar-footer',
        'description' => __('Appears at the bottom of the content on all pages.', 'avalon'),
        'before_widget' => '<div class="col-md-4"><div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Frontpage multi-sidebar', 'avalon'),
        'id' => 'sidebar-frontpage',
        'description' => __('Appears at the top side of the frontpage content.', 'avalon'),
        'before_widget' => '<div class="tab-pane" role="tabpanel" id="%1$s"><div class="multisidebar-widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Sidebar Left', 'avalon'),
        'id' => 'sidebar-left',
        'description' => __('Appears at the left side of the content on all pages.', 'avalon'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Sidebar Right', 'avalon'),
        'id' => 'sidebar-right',
        'description' => __('Appears at the right side of the content on all pages.', 'avalon'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
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

function empty_sidebar($sidebar) {
    if (is_active_sidebar($sidebar)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

//Theme customizer
include_once 'theme-support/theme-customizer.php';

//Settings page functions
include_once 'theme-support/theme-support-functions.php';

function default_contact_us() {
    parse_str($_POST['data'], $data);
    $user_name = $data['dcf_user_name'];
    $user_email = $data['dcf_user_email'];
    $user_message = $data['dcf_user_message'];
    $form_options = get_option('contact_us_area_form', '');
    $default_email = $form_options['default_form_email'];
    if (!empty($default_email)) {
        $form_email = $default_email;
    } else {
        $form_email = get_option('admin_email');
    }
    if (isset($data['dcf_user_email'])) {
        $to = $form_email;
        $from = $user_email;
        $name = $user_name;
        $text = $user_message;
        $subject = 'Contact form from ' . get_bloginfo('name');
        $message = $name . " (" . $from . ") \n\n" . $text;

        $headers = "From:" . $from;
        wp_mail($to, $subject, $message, $headers);
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
    die();
}

add_action('wp_ajax_default_contact_us', 'default_contact_us');
add_action('wp_ajax_nopriv_default_contact_us', 'default_contact_us');
