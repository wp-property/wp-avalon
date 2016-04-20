<?php

function avalon_customize_register($wp_customize) {

//    COLOR SCHEME
    $wp_customize->add_section('avalon_color_scheme', array(
        'title' => __('Color Scheme', 'avalon'),
        'description' => '',
        'priority' => 120,
    ));
//    Logo text color
    $wp_customize->add_setting('avalon_logo_text_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_logo_text_color', array(
        'label' => __('Logo Text Color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_logo_text_color',
    )));
//    header bg color
    $wp_customize->add_setting('avalon_header_bg_color', array(
        'default' => '#477fd3',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bg_color', array(
        'label' => __('Header background color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_header_bg_color',
    )));
//    Secondary header bg color
    $wp_customize->add_setting('avalon_secondary_header_bg_color', array(
        'default' => '#2b5188',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_header_bg_color', array(
        'label' => __('Secondary header background color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_secondary_header_bg_color',
    )));
//    header top border color
    $wp_customize->add_setting('avalon_header_top_border_color', array(
        'default' => '#679be7',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_top_border_color', array(
        'label' => __('Header top border color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_header_top_border_color',
    )));
//    header bottom border color
    $wp_customize->add_setting('avalon_header_bottom_border_color', array(
        'default' => '#0d255f',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bottom_border_color', array(
        'label' => __('Header bottom border color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_header_bottom_border_color',
    )));
//    Menu text color
    $wp_customize->add_setting('avalon_menu_text_color', array(
        'default' => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_menu_text_color', array(
        'label' => __('Menu text color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_menu_text_color',
    )));
//    Single & Page title color
    $wp_customize->add_setting('avalon_page_title_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_page_title_color', array(
        'label' => __('Single and Page title color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_page_title_color',
    )));

//    Head image settings
    $wp_customize->add_section('avalon_head_image_setting', array(
        'title' => __('Head image settings', 'avalon'),
        'description' => '',
        'priority' => 120,
    ));
//    Blur settings
    $wp_customize->add_setting('ahis__blur_setting', array(
        'default' => '0',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('ahis__blur_control', array(
        'label' => __('Blur image', 'avalon'),
        'section' => 'avalon_head_image_setting',
        'settings' => 'ahis__blur_setting',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 5,
            'step' => 1,
        ),
    ));
//    Blackout color
    $wp_customize->add_setting('ahis__blackout_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ahis__blackout_color', array(
        'label' => __('Blackout color for header image', 'avalon'),
        'section' => 'avalon_head_image_setting',
        'settings' => 'ahis__blackout_color',
    )));
//    Blackout opacity
    $wp_customize->add_setting('ahis__opacity_setting', array(
        'default' => '0',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('ahis__opacity_control', array(
        'label' => __('Blackout opacity (type "0.0-1.0" of opacity)', 'avalon'),
        'section' => 'avalon_head_image_setting',
        'settings' => 'ahis__opacity_setting',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 1,
            'step' => 0.1,
        ),
    ));
}

add_action('customize_register', 'avalon_customize_register');

function avalon_customize_css() {
    ?>
    <style type="text/css">
        body header .container .logotype a span { color:<?php echo get_theme_mod('avalon_logo_text_color'); ?>; }
        body header {
            background-color: <?php echo get_theme_mod('avalon_header_bg_color'); ?>;
            border-bottom: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color'); ?>;
            border-top: 1px solid <?php echo get_theme_mod('avalon_header_top_border_color'); ?>;
        }
        
        body header .container .navigation-box .navigation-wrapper .site-header-menu .main-navigation ul li a {
            color: <?php echo get_theme_mod('avalon_menu_text_color'); ?>;
        }

        body main.main-content .secondary-header {
            background-color: <?php echo get_theme_mod('avalon_secondary_header_bg_color'); ?>
        }
        
        body main.main-content .secondary-header .secondary-header-image {
            -webkit-filter: blur(<?php echo get_theme_mod('ahis__blur_setting'); ?>px);
            filter: blur(<?php echo get_theme_mod('ahis__blur_setting'); ?>px);
            filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='<?php echo get_theme_mod('ahis__blur_setting'); ?>');
        }
        body main.main-content .secondary-header .secondary-header-image:after {
            background-color: <?php echo get_theme_mod('ahis__blackout_color'); ?>;
            opacity: <?php echo get_theme_mod('ahis__opacity_setting'); ?>;
        }
        
        body main.main-content .secondary-header h1.page-title {
            color: <?php echo get_theme_mod('avalon_page_title_color'); ?>
        }
            
    </style>
    <?php
}

add_action('wp_head', 'avalon_customize_css');
