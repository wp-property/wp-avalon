<?php

function avalon_customize_register($wp_customize) {

//    COLOR SCHEME
    $wp_customize->add_section('avalon_color_scheme', array(
        'title' => __('Color Scheme', 'avalon'),
        'description' => '',
        'priority' => 120,
    ));
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
//    Header bar bg color
    $wp_customize->add_setting('avalon_header_bar_bg_color', array(
        'default' => '#4073bf',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bar_bg_color', array(
        'label' => __('Header bar background color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_header_bar_bg_color',
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
//    Single & Page tagline color
    $wp_customize->add_setting('avalon_page_tagline_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_page_tagline_color', array(
        'label' => __('Single and Page tagline color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_page_tagline_color',
    )));
//    Button bg color
    $wp_customize->add_setting('avalon_button_bg_color', array(
        'default' => '#337ab7',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_bg_color', array(
        'label' => __('Buttons background color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_button_bg_color',
    )));
//    Button border color
    $wp_customize->add_setting('avalon_button_border_color', array(
        'default' => '#2e6da4',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_border_color', array(
        'label' => __('Buttons border color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_button_border_color',
    )));
//    Button text color
    $wp_customize->add_setting('avalon_button_text_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_text_color', array(
        'label' => __('Buttons text color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_button_text_color',
    )));
//    Button bg color hover
    $wp_customize->add_setting('avalon_hover_button_bg_color', array(
        'default' => '#286090',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_bg_color', array(
        'label' => __('Buttons hover background color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_hover_button_bg_color',
    )));
//    Button border color hover
    $wp_customize->add_setting('avalon_hover_button_border_color', array(
        'default' => '#204d74',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_border_color', array(
        'label' => __('Buttons hover border color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_hover_button_border_color',
    )));
//    Button text color hover
    $wp_customize->add_setting('avalon_hover_button_text_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_text_color', array(
        'label' => __('Buttons hover text color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_hover_button_text_color',
    )));
//    Permalink color
    $wp_customize->add_setting('avalon_permalink_color', array(
        'default' => '#337ab7',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_permalink_color', array(
        'label' => __('Permalinks color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_permalink_color',
    )));
//    Permalink hover color
    $wp_customize->add_setting('avalon_permalink_hover_color', array(
        'default' => '#23527c',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_permalink_hover_color', array(
        'label' => __('Permalinks hover color', 'avalon'),
        'section' => 'avalon_color_scheme',
        'settings' => 'avalon_permalink_hover_color',
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

//    Logo settings
    $wp_customize->add_section('avalon_logo_settings', array(
        'title' => __('Logotype settings', 'avalon'),
        'description' => '',
        'priority' => 120,
    ));
//    Logo icon
    $wp_customize->add_setting('avalon_logo_icon_settings', array(
        'default' => get_template_directory_uri() . '/images/logo-icon.png',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'avalon_logo_icon_settings', array(
        'label' => __('Logo icon (Recommended height 20px)', 'avalon'),
        'section' => 'avalon_logo_settings',
        'settings' => 'avalon_logo_icon_settings',
    )));
//    Logo img margin top
    $wp_customize->add_setting('avalon_logo_icon_margin_setting', array(
        'default' => '-1',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_logo_icon_margin', array(
        'label' => __('Margin top in px', 'avalon'),
        'section' => 'avalon_logo_settings',
        'settings' => 'avalon_logo_icon_margin_setting',
        'type' => 'number',
        'input_attrs' => array(
            'min' => -50,
            'max' => 50,
            'step' => 1,
        ),
    ));
//    logo text settings
    $wp_customize->add_setting('avalon_logo_text_settings', array(
        'default' => 'Unreal Estate',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_logo_text_control', array(
        'label' => __('Logotype text', 'avalon'),
        'section' => 'avalon_logo_settings',
        'settings' => 'avalon_logo_text_settings',
    ));
//    Logo text color
    $wp_customize->add_setting('avalon_logo_text_color_settings', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_logo_color_text_settings', array(
        'label' => __('Logo Text Color', 'avalon'),
        'section' => 'avalon_logo_settings',
        'settings' => 'avalon_logo_text_color_settings',
    )));
//    Logo image
    $wp_customize->add_setting('avalon_logo_big_image_settings', array(
        'default' => '',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'avalon_logo_big_image_settings', array(
        'label' => __('Or load full logo image instead of logo with text', 'avalon'),
        'section' => 'avalon_logo_settings',
        'settings' => 'avalon_logo_big_image_settings',
    )));
//    Logo img margin top
    $wp_customize->add_setting('avalon_logo_img_margin_setting', array(
        'default' => '0',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_logo_img_margin', array(
        'label' => __('Margin top in px', 'avalon'),
        'section' => 'avalon_logo_settings',
        'settings' => 'avalon_logo_img_margin_setting',
        'type' => 'number',
        'input_attrs' => array(
            'min' => -50,
            'max' => 50,
            'step' => 1,
        ),
    ));

//    FOOTER Logo settings
    $wp_customize->add_section('avalon_footer_logo_settings', array(
        'title' => __('Footer Logotype settings', 'avalon'),
        'description' => '',
        'priority' => 120,
    ));
//    Footer Logo icon
    $wp_customize->add_setting('avalon_footer_logo_icon_settings', array(
        'default' => get_template_directory_uri() . '/images/logo-icon.png',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'avalon_footer_logo_icon_settings', array(
        'label' => __('Logo icon (Recommended height 20px)', 'avalon'),
        'section' => 'avalon_footer_logo_settings',
        'settings' => 'avalon_footer_logo_icon_settings',
    )));
//    Footer Logo img margin top
    $wp_customize->add_setting('avalon_footer_logo_icon_margin_setting', array(
        'default' => '-1',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_footer_logo_icon_margin', array(
        'label' => __('Margin top in px', 'avalon'),
        'section' => 'avalon_footer_logo_settings',
        'settings' => 'avalon_footer_logo_icon_margin_setting',
        'type' => 'number',
        'input_attrs' => array(
            'min' => -50,
            'max' => 50,
            'step' => 1,
        ),
    ));
//    Footer logo text settings
    $wp_customize->add_setting('avalon_footer_logo_text_settings', array(
        'default' => 'Unreal Estate',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_footer_logo_text_control', array(
        'label' => __('Logotype text', 'avalon'),
        'section' => 'avalon_footer_logo_settings',
        'settings' => 'avalon_footer_logo_text_settings',
    ));
//    Footer Logo text color
    $wp_customize->add_setting('avalon_footer_logo_text_color_settings', array(
        'default' => '#a7a7a7',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_footer_logo_color_text_settings', array(
        'label' => __('Logo Text Color', 'avalon'),
        'section' => 'avalon_footer_logo_settings',
        'settings' => 'avalon_footer_logo_text_color_settings',
    )));
//    Footer Logo image
    $wp_customize->add_setting('avalon_footer_logo_big_image_settings', array(
        'default' => '',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'avalon_footer_logo_big_image_settings', array(
        'label' => __('Or load full logo image instead of logo with text', 'avalon'),
        'section' => 'avalon_footer_logo_settings',
        'settings' => 'avalon_footer_logo_big_image_settings',
    )));
//    Footer Logo img margin top
    $wp_customize->add_setting('avalon_footer_logo_img_margin_setting', array(
        'default' => '0',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_footer_logo_img_margin', array(
        'label' => __('Margin top in px', 'avalon'),
        'section' => 'avalon_footer_logo_settings',
        'settings' => 'avalon_footer_logo_img_margin_setting',
        'type' => 'number',
        'input_attrs' => array(
            'min' => -50,
            'max' => 50,
            'step' => 1,
        ),
    ));

//    Copyrights
    $wp_customize->add_section('avalon_copyrights', array(
        'title' => __('Copyrights', 'avalon'),
        'description' => '',
        'priority' => 120,
    ));
//    Blur settings
    $wp_customize->add_setting('avalon_copyrights_settings', array(
        'default' => '',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_copyrights_control', array(
        'label' => __('Copyrights', 'avalon'),
        'section' => 'avalon_copyrights',
        'settings' => 'avalon_copyrights_settings',
    ));
}

add_action('customize_register', 'avalon_customize_register');

function avalon_customize_css() {
    ?>
    <style type="text/css">
        body header .container .logotype a span { color:<?php echo get_theme_mod('avalon_logo_text_color_settings', '#FFF'); ?>; }
        
        body header {
            background-color: <?php echo get_theme_mod('avalon_header_bg_color', '#477fd3'); ?>;
            border-bottom: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color', '#0d255f'); ?>;
            border-top: 1px solid <?php echo get_theme_mod('avalon_header_top_border_color'); ?>;
        }
        
        body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper {
            border-right: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color', '#0d255f'); ?>;
        }
        
        body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button {
            border-left: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color', '#0d255f'); ?>;
        }

        body .header-bar {
            background-color: <?php echo get_theme_mod('avalon_header_bar_bg_color', '#4073bf'); ?>;
        }
        body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button:hover,
        body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button.active {
            background-color: <?php echo get_theme_mod('avalon_header_bar_bg_color', '#4073bf'); ?>;
        }

        body header .container .navigation-box .navigation-wrapper .site-header-menu .main-navigation ul li a {
            color: <?php echo get_theme_mod('avalon_menu_text_color', '#FFFFFF'); ?>;
        }

        body main.main-content .secondary-header {
            background-color: <?php echo get_theme_mod('avalon_secondary_header_bg_color', '#2b5188'); ?>
        }

        body main.main-content .secondary-header .secondary-header-image {
            -webkit-filter: blur(<?php echo get_theme_mod('ahis__blur_setting', '0'); ?>px);
            filter: blur(<?php echo get_theme_mod('ahis__blur_setting', '0'); ?>px);
            filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='<?php echo get_theme_mod('ahis__blur_setting', '0'); ?>');
        }
        body main.main-content .secondary-header .secondary-header-image:after {
            background-color: <?php echo get_theme_mod('ahis__blackout_color', '#000000'); ?>;
            opacity: <?php echo get_theme_mod('ahis__opacity_setting', '0'); ?>;
        }

        body main.main-content .secondary-header h1.page-title {
            color: <?php echo get_theme_mod('avalon_page_title_color', '#FFF'); ?>
        }
        body main.main-content .secondary-header h3.page-tagline {
            color: <?php echo get_theme_mod('avalon_page_tagline_color', '#FFF'); ?>
        }
        body input[type="button"],
        body input[type="submit"],
        body input.submit-btn,
        body button.submit-btn,
        body a.submit-btn,
        body input.submit,
        body button.submit,
        body a.submit,
        body button[type="submit"],
        body input.wpp_feps_submit_form,
        body button.wpp_feps_submit_form,
        body a.wpp_feps_submit_form,
        body input.search_b,
        body button.search_b,
        body a.search_b,
        body input.show_more.btn,
        body button.show_more.btn,
        body a.show_more.btn,
        body p.view-all a.btn,
        body p.more a.btn {
            background-color: <?php echo get_theme_mod('avalon_button_bg_color', '#337ab7'); ?> !important;
            border-color: <?php echo get_theme_mod('avalon_button_border_color', '#2e6da4'); ?> !important;
            color: <?php echo get_theme_mod('avalon_button_text_color', '#FFF'); ?> !important;
        }
        body input[type="button"]:hover,
        body input[type="submit"]:hover,
        body input.submit-btn:hover,
        body button.submit-btn:hover,
        body a.submit-btn:hover,
        body input.submit:hover,
        body button.submit:hover,
        body a.submit:hover,
        body button[type="submit"]:hover,
        body input.wpp_feps_submit_form:hover,
        body button.wpp_feps_submit_form:hover,
        body a.wpp_feps_submit_form:hover,
        body input.search_b:hover,
        body button.search_b:hover,
        body a.search_b:hover,
        body input.show_more.btn:hover,
        body button.show_more.btn:hover,
        body a.show_more.btn:hover,
        body p.view-all a.btn:hover,
        body p.more a.btn:hover {
            background-color: <?php echo get_theme_mod('avalon_hover_button_bg_color', '#286090'); ?> !important;
            border-color: <?php echo get_theme_mod('avalon_hover_button_border_color', '#204d74'); ?> !important;
            color: <?php echo get_theme_mod('avalon_hover_button_text_color', '#FFF'); ?> !important;
        }

        a {
            color: <?php echo get_theme_mod('avalon_permalink_color', '#337ab7'); ?>;
        }
        a:focus,
        a:hover {
            color: <?php echo get_theme_mod('avalon_permalink_hover_color', '#23527c'); ?>;
        }

    </style>
    <?php
}

add_action('wp_head', 'avalon_customize_css');
