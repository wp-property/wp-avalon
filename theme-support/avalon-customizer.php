<?php

function avalon_customize_register($wp_customize) {

    class WP_Avalon_Theme_Support_WP_Property extends WP_Customize_Control {

        public function render_content() {
            if (function_exists('ud_check_wp_property')) {
                
            } else {
                echo __('Please, install or activate a <a href="https://www.usabilitydynamics.com/product/wp-property">WP Property</a> FREE plugin to use this option ', 'wp-avalon');
            }
        }

    }

    $wp_customize->remove_section('colors');

//    COLOR SCHEME
// -----------------------------------------------------------------------------
    $wp_customize->add_panel('general_colors', array(
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'title' => __('Color Scheme', 'wp-avalon')
    ));


//    Header colors section
    $wp_customize->add_section('avalon_header_colors_section', array(
        'title' => __('Header colors scheme', 'wp-avalon'),
        'priority' => 1,
        'panel' => 'general_colors'
    ));

//    header bg color
    $wp_customize->add_setting('avalon_header_bg_color', array(
        'default' => '#477fd3',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bg_color', array(
        'label' => __('Header background color', 'wp-avalon'),
        'section' => 'avalon_header_colors_section',
        'settings' => 'avalon_header_bg_color',
    )));
//    header top border color
    $wp_customize->add_setting('avalon_header_top_border_color', array(
        'default' => '#679be7',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_top_border_color', array(
        'label' => __('Header top border color', 'wp-avalon'),
        'section' => 'avalon_header_colors_section',
        'settings' => 'avalon_header_top_border_color',
    )));
//    header bottom border color
    $wp_customize->add_setting('avalon_header_bottom_border_color', array(
        'default' => '#0d255f',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bottom_border_color', array(
        'label' => __('Header bottom border color', 'wp-avalon'),
        'section' => 'avalon_header_colors_section',
        'settings' => 'avalon_header_bottom_border_color',
    )));
//    Secondary header bg color
    $wp_customize->add_setting('avalon_secondary_header_bg_color', array(
        'default' => '#2b5188',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_header_bg_color', array(
        'label' => __('Secondary header background color', 'wp-avalon'),
        'section' => 'avalon_header_colors_section',
        'settings' => 'avalon_secondary_header_bg_color',
    )));
//    Header bar bg color
    $wp_customize->add_setting('avalon_header_bar_bg_color', array(
        'default' => '#4073bf',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bar_bg_color', array(
        'label' => __('Header bar background color', 'wp-avalon'),
        'section' => 'avalon_header_colors_section',
        'settings' => 'avalon_header_bar_bg_color',
    )));
//    Header bar border color
    $wp_customize->add_setting('avalon_header_bar_border_color', array(
        'default' => '#325280',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bar_border_color', array(
        'label' => __('Header bar bottom border color', 'wp-avalon'),
        'section' => 'avalon_header_colors_section',
        'settings' => 'avalon_header_bar_border_color',
    )));


//    Menu text colors section
    $wp_customize->add_section('avalon_menu_color_scheme', array(
        'title' => __('Menu color scheme', 'wp-avalon'),
        'priority' => 2,
        'panel' => 'general_colors'
    ));

//    Menu text color
    $wp_customize->add_setting('avalon_menu_text_color', array(
        'default' => '#FFFFFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_menu_text_color', array(
        'label' => __('Menu text color', 'wp-avalon'),
        'section' => 'avalon_menu_color_scheme',
        'settings' => 'avalon_menu_text_color',
    )));


//    Post and Page title color section
    $wp_customize->add_section('avalon_postpage_color_scheme', array(
        'title' => __('Post and Page title color scheme', 'wp-avalon'),
        'priority' => 3,
        'panel' => 'general_colors'
    ));

//    Single & Page title color
    $wp_customize->add_setting('avalon_page_title_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_page_title_color', array(
        'label' => __('Single and Page title color', 'wp-avalon'),
        'section' => 'avalon_postpage_color_scheme',
        'settings' => 'avalon_page_title_color',
    )));

//    Single & Page tagline color
    $wp_customize->add_setting('avalon_page_tagline_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_page_tagline_color', array(
        'label' => __('Single and Page tagline color', 'wp-avalon'),
        'section' => 'avalon_postpage_color_scheme',
        'settings' => 'avalon_page_tagline_color',
    )));


//    Buttons color scheme section
    $wp_customize->add_section('avalon_buttons_color_scheme', array(
        'title' => __('Buttons color scheme', 'wp-avalon'),
        'priority' => 4,
        'panel' => 'general_colors'
    ));

//    Button bg color
    $wp_customize->add_setting('avalon_button_bg_color', array(
        'default' => '#337ab7',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_bg_color', array(
        'label' => __('Buttons background color', 'wp-avalon'),
        'section' => 'avalon_buttons_color_scheme',
        'settings' => 'avalon_button_bg_color',
    )));

//    Button border color
    $wp_customize->add_setting('avalon_button_border_color', array(
        'default' => '#2e6da4',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_border_color', array(
        'label' => __('Buttons border color', 'wp-avalon'),
        'section' => 'avalon_buttons_color_scheme',
        'settings' => 'avalon_button_border_color',
    )));

//    Button text color
    $wp_customize->add_setting('avalon_button_text_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_text_color', array(
        'label' => __('Buttons text color', 'wp-avalon'),
        'section' => 'avalon_buttons_color_scheme',
        'settings' => 'avalon_button_text_color',
    )));

//    Button bg color hover
    $wp_customize->add_setting('avalon_hover_button_bg_color', array(
        'default' => '#286090',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_bg_color', array(
        'label' => __('Buttons hover background color', 'wp-avalon'),
        'section' => 'avalon_buttons_color_scheme',
        'settings' => 'avalon_hover_button_bg_color',
    )));

//    Button border color hover
    $wp_customize->add_setting('avalon_hover_button_border_color', array(
        'default' => '#204d74',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_border_color', array(
        'label' => __('Buttons hover border color', 'wp-avalon'),
        'section' => 'avalon_buttons_color_scheme',
        'settings' => 'avalon_hover_button_border_color',
    )));

//    Button text color hover
    $wp_customize->add_setting('avalon_hover_button_text_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_text_color', array(
        'label' => __('Buttons hover text color', 'wp-avalon'),
        'section' => 'avalon_buttons_color_scheme',
        'settings' => 'avalon_hover_button_text_color',
    )));

//    Secondary button text color hover
    $wp_customize->add_setting('avalon_secondary_button_color', array(
        'default' => '#5bc0de',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_button_color', array(
        'label' => __('Property sort buttons background color', 'wp-avalon'),
        'section' => 'avalon_buttons_color_scheme',
        'settings' => 'avalon_secondary_button_color',
    )));

//    Secondary button text color hover
    $wp_customize->add_setting('avalon_secondary_button_text_color', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_button_text_color', array(
        'label' => __('Property sort buttons text color', 'wp-avalon'),
        'section' => 'avalon_buttons_color_scheme',
        'settings' => 'avalon_secondary_button_text_color',
    )));


//    Permalinks color scheme section
    $wp_customize->add_section('avalon_permalinks_color_scheme', array(
        'title' => __('Permalinks color scheme', 'wp-avalon'),
        'priority' => 5,
        'panel' => 'general_colors'
    ));

//    Permalink color
    $wp_customize->add_setting('avalon_permalink_color', array(
        'default' => '#337ab7',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_permalink_color', array(
        'label' => __('Permalinks color', 'wp-avalon'),
        'section' => 'avalon_permalinks_color_scheme',
        'settings' => 'avalon_permalink_color',
    )));

//    Permalink hover color
    $wp_customize->add_setting('avalon_permalink_hover_color', array(
        'default' => '#23527c',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_permalink_hover_color', array(
        'label' => __('Permalinks hover color', 'wp-avalon'),
        'section' => 'avalon_permalinks_color_scheme',
        'settings' => 'avalon_permalink_hover_color',
    )));

//    Headlights section
// -----------------------------------------------------------------------------
    $wp_customize->add_panel('headlights_panel', array(
        'priority' => 31,
        'capability' => 'edit_theme_options',
        'title' => __('Headlights settings', 'wp-avalon')
    ));

//    Headlight Settings
    $wp_customize->add_section('headlights_settings_section', array(
        'title' => __('Headlight settings', 'wp-avalon'),
        'panel' => 'headlights_panel',
        'priority' => 1,
    ));
// disable section
    $wp_customize->add_setting('headlights_disable_setting', array(
        'default' => ''
    ));
    $wp_customize->add_control('headlights_disable_setting', array(
        'label' => __('Disable this section', 'wp-avalon'),
        'section' => 'headlights_settings_section',
        'type' => 'checkbox',
        'priority' => 1
    ));
// section title
    $wp_customize->add_setting('headlights_title_setting', array(
        'default' => __('Recommended add-ons', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlights_title_setting', array(
        'label' => __('Headlight title', 'wp-avalon'),
        'section' => 'headlights_settings_section',
        'type' => 'text',
        'priority' => 2
    ));

//    Headlight first box
    $wp_customize->add_section('headlight_1_box_section', array(
        'title' => __('Headlight first box', 'wp-avalon'),
        'panel' => 'headlights_panel',
        'priority' => 2,
    ));
// Enable box 1
    $wp_customize->add_setting('headlight_1_box_hidden_settings', array(
        'default' => ''
    ));
    $wp_customize->add_control('headlight_1_box_hidden_settings', array(
        'label' => __('Hide this box', 'wp-avalon'),
        'section' => 'headlight_1_box_section',
        'type' => 'checkbox'
    ));
// title 1
    $wp_customize->add_setting('headlight_1_box_title_settings', array(
        'default' => __('WP-Property: Walk Score', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_1_box_title_settings', array(
        'label' => __('Title', 'wp-avalon'),
        'section' => 'headlight_1_box_section',
        'type' => 'text'
    ));
// excerpt 1
    $wp_customize->add_setting('headlight_1_box_excerpt_settings', array(
        'default' => __('Adds Walk Score\'s and Neighborhood Map\'s Widgets and Shortcodes to your Site powered by WP-Property plugin. And allows to sort and search your listings by Walk Score.', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_1_box_excerpt_settings', array(
        'label' => __('Excerpt', 'wp-avalon'),
        'section' => 'headlight_1_box_section',
        'type' => 'text'
    ));
// price 1
    $wp_customize->add_setting('headlight_1_box_price_settings', array(
        'default' => '$35.00',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_1_box_price_settings', array(
        'label' => __('Price', 'wp-avalon'),
        'section' => 'headlight_1_box_section',
        'type' => 'text'
    ));
// read more 1
    $wp_customize->add_setting('headlight_1_box_more_settings', array(
        'default' => __(__('More details', 'wp-avalon'), 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_1_box_more_settings', array(
        'label' => __('Read more button label', 'wp-avalon'),
        'section' => 'headlight_1_box_section',
        'type' => 'text'
    ));
// url 1
    $wp_customize->add_setting('headlight_1_box_url_settings', array(
        'default' => 'https://www.usabilitydynamics.com/product/wp-property-walkscore',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_1_box_url_settings', array(
        'label' => __('Box URL', 'wp-avalon'),
        'section' => 'headlight_1_box_section',
        'type' => 'text'
    ));
// image 1
    $wp_customize->add_setting('headlight_1_box_image_settings', array(
        'default' => get_template_directory_uri() . '/images/fhb__image-1.png',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'headlight_1_box_image_settings', array(
        'label' => __('Image', 'wp-avalon'),
        'section' => 'headlight_1_box_section',
    )));
//    Headlight second box
    $wp_customize->add_section('headlight_2_box_section', array(
        'title' => __('Headlight second box', 'wp-avalon'),
        'panel' => 'headlights_panel',
        'priority' => 3,
    ));
// Enable box 2
    $wp_customize->add_setting('headlight_2_box_hidden_settings', array(
        'default' => ''
    ));
    $wp_customize->add_control('headlight_2_box_hidden_settings', array(
        'label' => __('Hide this box', 'wp-avalon'),
        'section' => 'headlight_2_box_section',
        'type' => 'checkbox'
    ));
// title 2
    $wp_customize->add_setting('headlight_2_box_title_settings', array(
        'default' => __('WP-Property: Slideshow', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_2_box_title_settings', array(
        'label' => __('Title', 'wp-avalon'),
        'section' => 'headlight_2_box_section',
        'type' => 'text'
    ));
// excerpt 2
    $wp_customize->add_setting('headlight_2_box_excerpt_settings', array(
        'default' => __('Allows you to insert a slideshow into any property page, home page, or virtually anywhere in your blog.', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_2_box_excerpt_settings', array(
        'label' => __('Excerpt', 'wp-avalon'),
        'section' => 'headlight_2_box_section',
        'type' => 'text'
    ));
// price 2
    $wp_customize->add_setting('headlight_2_box_price_settings', array(
        'default' => '$50.00',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_2_box_price_settings', array(
        'label' => __('Price', 'wp-avalon'),
        'section' => 'headlight_2_box_section',
        'type' => 'text'
    ));
// read more 2
    $wp_customize->add_setting('headlight_2_box_more_settings', array(
        'default' => __('More details', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_2_box_more_settings', array(
        'label' => __('Read more button label', 'wp-avalon'),
        'section' => 'headlight_2_box_section',
        'type' => 'text'
    ));
// url 2
    $wp_customize->add_setting('headlight_2_box_url_settings', array(
        'default' => 'https://www.usabilitydynamics.com/product/wp-property-slideshow',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_2_box_url_settings', array(
        'label' => __('Box URL', 'wp-avalon'),
        'section' => 'headlight_2_box_section',
        'type' => 'text'
    ));
// image 2
    $wp_customize->add_setting('headlight_2_box_image_settings', array(
        'default' => get_template_directory_uri() . '/images/fhb__image-2.png',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'headlight_2_box_image_settings', array(
        'label' => __('Image', 'wp-avalon'),
        'section' => 'headlight_2_box_section',
    )));
//    Headlight third box
    $wp_customize->add_section('headlight_3_box_section', array(
        'title' => __('Headlight third box', 'wp-avalon'),
        'panel' => 'headlights_panel',
        'priority' => 4,
    ));
// Enable box 3
    $wp_customize->add_setting('headlight_3_box_hidden_settings', array(
        'default' => ''
    ));
    $wp_customize->add_control('headlight_3_box_hidden_settings', array(
        'label' => __('Hide this box', 'wp-avalon'),
        'section' => 'headlight_3_box_section',
        'type' => 'checkbox'
    ));
// title 3
    $wp_customize->add_setting('headlight_3_box_title_settings', array(
        'default' => __('WP-Property: Super Map', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_3_box_title_settings', array(
        'label' => __('Title', 'wp-avalon'),
        'section' => 'headlight_3_box_section',
        'type' => 'text'
    ));
// excerpt 3
    $wp_customize->add_setting('headlight_3_box_excerpt_settings', array(
        'default' => __('Lets you put a large interactive map virtually anywhere in your WordPress setup. The map lets your visitors quickly view the location of all your properties, and filter them down by attributes.', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_3_box_excerpt_settings', array(
        'label' => __('Excerpt', 'wp-avalon'),
        'section' => 'headlight_3_box_section',
        'type' => 'text'
    ));
// price 3
    $wp_customize->add_setting('headlight_3_box_price_settings', array(
        'default' => '$50.00',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_3_box_price_settings', array(
        'label' => __('Price', 'wp-avalon'),
        'section' => 'headlight_3_box_section',
        'type' => 'text'
    ));
// read more 3
    $wp_customize->add_setting('headlight_3_box_more_settings', array(
        'default' => __('More details', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_3_box_more_settings', array(
        'label' => __('Read more button label', 'wp-avalon'),
        'section' => 'headlight_3_box_section',
        'type' => 'text'
    ));
// url 3
    $wp_customize->add_setting('headlight_3_box_url_settings', array(
        'default' => 'https://www.usabilitydynamics.com/product/wp-property-supermap',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_3_box_url_settings', array(
        'label' => __('Box URL', 'wp-avalon'),
        'section' => 'headlight_3_box_section',
        'type' => 'text'
    ));
// image 3
    $wp_customize->add_setting('headlight_3_box_image_settings', array(
        'default' => get_template_directory_uri() . '/images/fhb__image-3.png',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'headlight_3_box_image_settings', array(
        'label' => __('Image', 'wp-avalon'),
        'section' => 'headlight_3_box_section',
    )));
//    Headlight fourth box
    $wp_customize->add_section('headlight_4_box_section', array(
        'title' => __('Headlight fourth box', 'wp-avalon'),
        'panel' => 'headlights_panel',
        'priority' => 5,
    ));
// Enable box 4
    $wp_customize->add_setting('headlight_4_box_hidden_settings', array(
        'default' => ''
    ));
    $wp_customize->add_control('headlight_4_box_hidden_settings', array(
        'label' => __('Hide this box', 'wp-avalon'),
        'section' => 'headlight_4_box_section',
        'type' => 'checkbox'
    ));
// title 4
    $wp_customize->add_setting('headlight_4_box_title_settings', array(
        'default' => __('WP-Property: Importer', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_4_box_title_settings', array(
        'label' => __('Title', 'wp-avalon'),
        'section' => 'headlight_4_box_section',
        'type' => 'text'
    ));
// excerpt 4
    $wp_customize->add_setting('headlight_4_box_excerpt_settings', array(
        'default' => __('The XMLI Importer enables you to automatically import property listings directly into your website. This includes MLS, RETS, XML, CSV formats. Properties are created, merged, removed, or updated according to rules you specify.', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_4_box_excerpt_settings', array(
        'label' => __('Excerpt', 'wp-avalon'),
        'section' => 'headlight_4_box_section',
        'type' => 'text'
    ));
// price 4
    $wp_customize->add_setting('headlight_4_box_price_settings', array(
        'default' => '$175.00',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_4_box_price_settings', array(
        'label' => __('Price', 'wp-avalon'),
        'section' => 'headlight_4_box_section',
        'type' => 'text'
    ));
// read more 4
    $wp_customize->add_setting('headlight_4_box_more_settings', array(
        'default' => __('More details', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_4_box_more_settings', array(
        'label' => __('Read more button label', 'wp-avalon'),
        'section' => 'headlight_4_box_section',
        'type' => 'text'
    ));
// url 4
    $wp_customize->add_setting('headlight_4_box_url_settings', array(
        'default' => 'https://www.usabilitydynamics.com/product/wp-property-importer',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlight_4_box_url_settings', array(
        'label' => __('Box URL', 'wp-avalon'),
        'section' => 'headlight_4_box_section',
        'type' => 'text'
    ));
// image 4
    $wp_customize->add_setting('headlight_4_box_image_settings', array(
        'default' => get_template_directory_uri() . '/images/fhb__image-4.png',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'headlight_4_box_image_settings', array(
        'label' => __('Image', 'wp-avalon'),
        'section' => 'headlight_4_box_section',
    )));

//    Headlights widget area
// -----------------------------------------------------------------------------
    $wp_customize->add_panel('headlights_widget_area_panel', array(
        'priority' => 31,
        'capability' => 'edit_theme_options',
        'title' => __('Headlights widget area settings', 'wp-avalon')
    ));

//    Headlight Settings
    $wp_customize->add_section('headlights_wa_settings_section', array(
        'title' => __('Area settings', 'wp-avalon'),
        'panel' => 'headlights_widget_area_panel',
        'priority' => 1,
    ));
// disable section
    $wp_customize->add_setting('headlights_wa_disable_setting', array(
        'default' => ''
    ));
    $wp_customize->add_control('headlights_wa_disable_setting', array(
        'label' => __('Disable widget area section', 'wp-avalon'),
        'section' => 'headlights_wa_settings_section',
        'type' => 'checkbox',
        'priority' => 1
    ));
// section title
    $wp_customize->add_setting('headlights_wa_title_setting', array(
        'default' => __('Headlight widget area title', 'wp-avalon'),
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('headlights_wa_title_setting', array(
        'label' => __('Headlight widget area title', 'wp-avalon'),
        'section' => 'headlights_wa_settings_section',
        'type' => 'text',
        'priority' => 2
    ));

//    WP Property settings
    if (function_exists('ud_check_wp_property')) {
        $wp_customize->add_panel('wp_property_settings_control', array(
            'priority' => 32,
            'capability' => 'edit_theme_options',
            'title' => __('WP Property settings', 'wp-avalon')
        ));

        // Main settings
        $wp_customize->add_section('wp_property_settings_section', array(
            'title' => __('Settings', 'wp-avalon'),
            'panel' => 'wp_property_settings_control',
            'priority' => 1,
        ));

        // Show default property search
        $wp_customize->add_setting('wp_property_show_default_property_search', array(
            'default' => '1'
        ));
        $wp_customize->add_control('wp_property_show_default_property_search', array(
            'label' => __('Show default property search on "Front page" widget area', 'wp-avalon'),
            'section' => 'wp_property_settings_section',
            'type' => 'checkbox',
            'priority' => 1
        ));
    } else {
        $wp_customize->add_section('wp_property_disabled_settings_section', array(
            'title' => __('WP Property settings', 'wp-avalon'),
            'priority' => 32,
        ));
        // disable section
        $wp_customize->add_setting('wp_property_disabled_settings_section', array(
            'sanitize_callback' => 'avalon_closed_section'
        ));
        $wp_customize->add_control(new WP_Avalon_Theme_Support_WP_Property($wp_customize, 'wp_property_disabled_settings_section', array(
            'section' => 'wp_property_disabled_settings_section',
        )));
    }


//  --------------------------------------------------------------------------
//  Header settings
//  --------------------------------------------------------------------------
    $wp_customize->add_panel('header_main_settings_control', array(
        'priority' => 33,
        'capability' => 'edit_theme_options',
        'title' => __('Header settings', 'wp-avalon')
    ));

    // Login/Register settings
    $wp_customize->add_section('header_main_settings_section', array(
        'title' => __('Login/Register', 'wp-avalon'),
        'panel' => 'header_main_settings_control',
        'priority' => 1,
    ));
    // Show default Login/Register button
    $wp_customize->add_setting('header_main_show_login_register_button', array(
        'default' => '1'
    ));
    $wp_customize->add_control('header_main_show_login_register_button', array(
        'label' => __('Show Login/Register button', 'wp-avalon'),
        'section' => 'header_main_settings_section',
        'type' => 'checkbox',
        'priority' => 1
    ));

    // Header image settings
    $wp_customize->add_section('header_image_settings_section', array(
        'title' => __('Header image settings', 'wp-avalon'),
        'panel' => 'header_main_settings_control',
        'priority' => 2,
    ));
    // Header image
    $wp_customize->add_setting('header_image', array(
        'default' => get_template_directory_uri() . '/images/default-header-image.jpg',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
        'label' => __('Header image', 'wp-avalon'),
        'section' => 'header_image_settings_section',
    )));
    // Show fetured image in header
    $wp_customize->add_setting('header_image_show_featured_image_in_head', array(
        'default' => '1'
    ));
    $wp_customize->add_control('header_image_show_featured_image_in_head', array(
        'label' => __('Show fetured image in header instead of header image', 'wp-avalon'),
        'section' => 'header_image_settings_section',
        'type' => 'checkbox',
        'priority' => 1
    ));
    // Blur settings
    $wp_customize->add_setting('header_image__blur_setting', array(
        'capability' => 'edit_theme_options',
        'default' => '0'
    ));
    $wp_customize->add_control('header_image__blur_setting', array(
        'label' => __('Blur image. Default: 0', 'wp-avalon'),
        'section' => 'header_image_settings_section',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 5,
            'step' => 1,
        ),
    ));
//    Blackout color
    $wp_customize->add_setting('header_image__blackout_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_image__blackout_color', array(
        'label' => __('Blackout color for header image', 'wp-avalon'),
        'section' => 'header_image_settings_section',
    )));
//    Blackout opacity
    $wp_customize->add_setting('header_image__opacity_setting', array(
        'capability' => 'edit_theme_options',
        'default' => '0'
    ));
    $wp_customize->add_control('header_image__opacity_setting', array(
        'label' => __('Blackout opacity (type "0.0-1.0" of opacity). Default: 0', 'wp-avalon'),
        'section' => 'header_image_settings_section',
        'type' => 'range',
        'input_attrs' => array(
            'min' => 0,
            'max' => 1,
            'step' => 0.1,
        ),
    ));

//    Logo settings
    $wp_customize->add_section('header_logo_settings', array(
        'title' => __('Logotype settings', 'wp-avalon'),
        'panel' => 'header_main_settings_control',
        'description' => '',
        'priority' => 3,
    ));
//    Logo icon
    $wp_customize->add_setting('header_logo_icon_settings', array(
        'default' => get_template_directory_uri() . '/images/logo-icon.png',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_icon_settings', array(
        'label' => __('Logo icon (Recommended height 20px)', 'wp-avalon'),
        'section' => 'header_logo_settings',
    )));
//    Logo img margin top
    $wp_customize->add_setting('header_logo_icon_margin_setting', array(
        'default' => '-1',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('header_logo_icon_margin_setting', array(
        'label' => __('Margin top in px', 'wp-avalon'),
        'section' => 'header_logo_settings',
        'type' => 'number',
        'input_attrs' => array(
            'min' => -50,
            'max' => 50,
            'step' => 1,
        ),
    ));
//    logo text settings
    $wp_customize->add_setting('header_logo_text_settings', array(
        'default' => 'Unreal Estate',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('header_logo_text_settings', array(
        'label' => __('Logotype text', 'wp-avalon'),
        'section' => 'header_logo_settings',
    ));
//    Logo text color
    $wp_customize->add_setting('header_logo_text_color_settings', array(
        'default' => '#FFF',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_logo_text_color_settings', array(
        'label' => __('Logo Text Color', 'wp-avalon'),
        'section' => 'header_logo_settings',
    )));
//    Logo image
    $wp_customize->add_setting('header_logo_big_image_settings', array(
        'default' => '',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_big_image_settings', array(
        'label' => __('Or load full logo image instead of logo with text', 'wp-avalon'),
        'section' => 'header_logo_settings',
    )));
//    Logo img margin top
    $wp_customize->add_setting('header_logo_img_margin_setting', array(
        'default' => '0',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('header_logo_img_margin_setting', array(
        'label' => __('Margin top in px', 'wp-avalon'),
        'section' => 'header_logo_settings',
        'type' => 'number',
        'input_attrs' => array(
            'min' => -50,
            'max' => 50,
            'step' => 1,
        ),
    ));
    
    // Header Contact us settings
    $wp_customize->add_section('header_contuctus_settings_section', array(
        'title' => __('Contact us settings', 'wp-avalon'),
        'panel' => 'header_main_settings_control',
        'priority' => 4,
    ));
    // Disable "Contact us" area
    $wp_customize->add_setting('header_contuctus_disable_settings', array(
        'default' => ''
    ));
    $wp_customize->add_control('header_contuctus_disable_settings', array(
        'label' => __('Disable "Contact us" area', 'wp-avalon'),
        'section' => 'header_contuctus_settings_section',
        'type' => 'checkbox',
        'priority' => 1
    ));
    // "Contact us" area title
    $wp_customize->add_setting('header_contuctus_title_settings', array(
        'capability' => 'edit_theme_options',
        'default' => 'CONTACT FORM'
    ));
    $wp_customize->add_control('header_contuctus_title_settings', array(
        'label' => __('"Contact us" area title', 'wp-avalon'),
        'section' => 'header_contuctus_settings_section',
        'type' => 'text',
        'priority' => 2
    ));
    // "Contact us" area description
    $wp_customize->add_setting('header_contuctus_description_settings', array(
        'capability' => 'edit_theme_options',
        'default' => 'Quisque tincidunt ornare sapien, at commodo ante tristique non. Integer id tellus nisl. Donec eget nunc eget odio malesuada egestas.'
    ));
    $wp_customize->add_control('header_contuctus_description_settings', array(
        'label' => __('"Contact us" area description', 'wp-avalon'),
        'section' => 'header_contuctus_settings_section',
        'type' => 'textarea',
        'priority' => 3
    ));
    // "Contact us" form options
    $wp_customize->add_setting('header_contuctus_form_settings', array(
        'default' => 'default',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('header_contuctus_form_settings', array(
        'label' => __('Contact us foms settings', 'themename'),
        'section' => 'header_contuctus_settings_section',
        'priority' => 4,
        'type' => 'radio',
        'choices' => array(
            'default' => 'Use default form (emails will be send to site admin email)',
            'custom' => 'Use custom form with shortcode',
        ),
    ));
    // "Contact us" custom form shortcode
    $wp_customize->add_setting('header_contuctus_shortcode_settings', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));
    $wp_customize->add_control('header_contuctus_shortcode_settings', array(
        'label' => __('"Contact us" custom form shortcode', 'wp-avalon'),
        'section' => 'header_contuctus_settings_section',
        'type' => 'text',
        'priority' => 5
    ));
    // "Contact us" custom form CSS
    $wp_customize->add_setting('header_contuctus_css_settings', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));
    $wp_customize->add_control('header_contuctus_css_settings', array(
        'label' => __('"Contact us" custom form CSS', 'wp-avalon'),
        'section' => 'header_contuctus_settings_section',
        'type' => 'textarea',
        'priority' => 6
    ));
    

//  Location area settings
    $wp_customize->add_section('header_location_area_section', array(
        'title' => __('"Location" area settings', 'wp-avalon'),
        'panel' => 'header_main_settings_control',
        'description' => '',
        'priority' => 5,
    ));
    // Disable "Location" area
    $wp_customize->add_setting('header_location_area_settings', array(
        'default' => ''
    ));
    $wp_customize->add_control('header_location_area_settings', array(
        'label' => __('Disable "Location" area', 'wp-avalon'),
        'section' => 'header_location_area_section',
        'type' => 'checkbox',
        'priority' => 1
    ));
    // "Location" area title
    $wp_customize->add_setting('header_location_area_title', array(
        'capability' => 'edit_theme_options',
        'default' => __('Location & Address', 'wp-avalon')
    ));
    $wp_customize->add_control('header_location_area_title', array(
        'label' => __('"Location" area title', 'wp-avalon'),
        'section' => 'header_location_area_section',
        'type' => 'text',
        'priority' => 2
    ));
    // "Location" adress
    $wp_customize->add_setting('header_location_area_map_location', array(
        'capability' => 'edit_theme_options',
        'default' => ''
    ));
    $wp_customize->add_control('header_location_area_map_location', array(
        'label' => __('"Location" adress (for google map)', 'wp-avalon'),
        'section' => 'header_location_area_section',
        'type' => 'text',
        'priority' => 3
    ));
    // "Location" image
    $wp_customize->add_setting('header_location_area_image', array(
        'default' => '',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_location_area_image', array(
        'label' => __('or use image', 'wp-avalon'),
        'section' => 'header_location_area_section',
        'priority' => 4
    )));
    // "Location" description
    $wp_customize->add_setting('header_location_area_description', array(
        'capability' => 'edit_theme_options',
        'default' => __('Here you can add some decription', 'wp-avalon')
    ));
    $wp_customize->add_control('header_location_area_description', array(
        'label' => __('"Location" area decrpiption', 'wp-avalon'),
        'section' => 'header_location_area_section',
        'type' => 'textarea',
        'priority' => 5
    ));
    

//    FOOTER Logo settings
    $wp_customize->add_section('avalon_footer_logo_settings', array(
        'title' => __('Footer Logotype settings', 'wp-avalon'),
        'description' => '',
        'priority' => 120,
    ));
//    Footer Logo icon
    $wp_customize->add_setting('avalon_footer_logo_icon_settings', array(
        'default' => get_template_directory_uri() . '/images/logo-icon.png',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'avalon_footer_logo_icon_settings', array(
        'label' => __('Logo icon (Recommended height 20px)', 'wp-avalon'),
        'section' => 'avalon_footer_logo_settings',
        'settings' => 'avalon_footer_logo_icon_settings',
    )));
//    Footer Logo img margin top
    $wp_customize->add_setting('avalon_footer_logo_icon_margin_setting', array(
        'default' => '-1',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_footer_logo_icon_margin', array(
        'label' => __('Margin top in px', 'wp-avalon'),
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
        'label' => __('Logotype text', 'wp-avalon'),
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
        'label' => __('Logo Text Color', 'wp-avalon'),
        'section' => 'avalon_footer_logo_settings',
        'settings' => 'avalon_footer_logo_text_color_settings',
    )));
//    Footer Logo image
    $wp_customize->add_setting('avalon_footer_logo_big_image_settings', array(
        'default' => '',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'avalon_footer_logo_big_image_settings', array(
        'label' => __('Or load full logo image instead of logo with text', 'wp-avalon'),
        'section' => 'avalon_footer_logo_settings',
        'settings' => 'avalon_footer_logo_big_image_settings',
    )));
//    Footer Logo img margin top
    $wp_customize->add_setting('avalon_footer_logo_img_margin_setting', array(
        'default' => '0',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_footer_logo_img_margin', array(
        'label' => __('Margin top in px', 'wp-avalon'),
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
        'title' => __('Copyrights', 'wp-avalon'),
        'description' => '',
        'priority' => 120,
    ));
//    Blur settings
    $wp_customize->add_setting('avalon_copyrights_settings', array(
        'default' => '',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control('avalon_copyrights_control', array(
        'label' => __('Copyrights', 'wp-avalon'),
        'section' => 'avalon_copyrights',
        'settings' => 'avalon_copyrights_settings',
    ));
}

add_action('customize_register', 'avalon_customize_register');

function avalon_closed_section($input) {
    return $input;
    echo '23456789';
}

function avalon_customize_css() {
    ?>
    <style type="text/css">
        body header .container .logotype a span { color:<?php echo get_theme_mod('header_logo_text_color_settings', '#FFF'); ?>; }

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
            border-bottom: 1px solid <?php echo get_theme_mod('avalon_header_bar_border_color', '#325280'); ?>;
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
            -webkit-filter: blur(<?php echo get_theme_mod('header_image__blur_setting', '0'); ?>px);
            filter: blur(<?php echo get_theme_mod('header_image__blur_setting', '0'); ?>px);
            filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius='<?php echo get_theme_mod('header_image__blur_setting', '0'); ?>');
        }
        body main.main-content .secondary-header .secondary-header-image:after {
            background-color: <?php echo get_theme_mod('header_image__blackout_color', '#000000'); ?>;
            opacity: <?php echo get_theme_mod('header_image__opacity_setting', '0'); ?>;
        }

        body main.main-content .secondary-header h1.page-title {
            color: <?php echo get_theme_mod('avalon_page_title_color', '#FFF'); ?>;
        }
        body main.main-content .secondary-header h3.page-tagline {
            color: <?php echo get_theme_mod('avalon_page_tagline_color', '#FFF'); ?>;
        }

        .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li a,
        .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li a,
        .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li.current-page a,
        .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li.current-page a,
        .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .first-page-btn a,
        .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .first-page-btn a,
        .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .previous-page-btn a,
        .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .previous-page-btn a,
        .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .next-page-btn a,
        .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .next-page-btn a,
        .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .last-page-btn a,
        .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .last-page-btn a,
        .widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button,
        .wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button,
        .wpp_property_overview_shortcode .properties_pagination .wpp_property_results_options .wpp_sorter_options .wpp_sortable_link,
        .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button {
            background-color: <?php echo get_theme_mod('avalon_secondary_button_color', '#5bc0de'); ?>;
            color: <?php echo get_theme_mod('avalon_secondary_button_text_color', '#FFF'); ?>;
        }

        .btn-info,
        body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button,
        body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button,
        body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button,
        .wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button,
        body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li,
        body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn,
        body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info,
        body input[type="button"],
        body input[type="submit"],
        body input.submit-btn,
        body button.submit-btn,
        body a.submit-btn,
        body span.submit-btn,
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
        .btn-info:hover,
        body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button:hover,
        body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button:hover,
        body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button:hover,
        .wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button:hover,
        body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li.active,
        body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn:hover,
        body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info:hover,
        body input[type="button"]:hover,
        body input[type="submit"]:hover,
        body input.submit-btn:hover,
        body button.submit-btn:hover,
        body a.submit-btn:hover,
        body span.submit-btn:hover,
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
