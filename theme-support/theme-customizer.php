<?php

function avalon_customize_register($wp_customize) {
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
    </style>
    <?php
}

add_action('wp_head', 'avalon_customize_css');
