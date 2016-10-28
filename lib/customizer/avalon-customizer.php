<?php

function avalon_customize_register($wp_customize)
{

  class WP_Avalon_Theme_Support_WP_Property extends WP_Customize_Control
  {

    public function render_content()
    {
      _e('Please, install or activate a <a href="https://www.usabilitydynamics.com/product/wp-property">WP Property</a> FREE plugin to use this option ', 'wp-avalon');
    }

  }

  $wp_customize->remove_section('colors');

  $shortcode_notice = __('Notice: Shortcodes will be applied after the page reload', 'wp-avalon');

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
    'default' => '#19294c',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bg_color', array(
    'label' => __('Header background color', 'wp-avalon'),
    'description' => __('This color will be used for several blocks on the site: responsive menu background, overview and header.', 'wp-avalon'),
    'section' => 'avalon_header_colors_section',
    'priority' => 1
  )));
//    header top border color
  $wp_customize->add_setting('avalon_header_top_border_color', array(
    'default' => '#101a30',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_top_border_color', array(
    'label' => __('Header top border color', 'wp-avalon'),
    'section' => 'avalon_header_colors_section',
    'priority' => 2
  )));
//    header bottom border color
  $wp_customize->add_setting('avalon_header_bottom_border_color', array(
    'default' => '#2f3d5d',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bottom_border_color', array(
    'label' => __('Header bottom border color', 'wp-avalon'),
    'section' => 'avalon_header_colors_section',
    'priority' => 3
  )));
//    Secondary header bg color
  $wp_customize->add_setting('avalon_secondary_header_bg_color', array(
    'default' => '#2b5188',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_header_bg_color', array(
    'label' => __('Secondary header background color', 'wp-avalon'),
    'section' => 'avalon_header_colors_section',
    'priority' => 4
  )));
//    Header bar bg color
  $wp_customize->add_setting('avalon_header_bar_bg_color', array(
    'default' => '#0b1a3a',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bar_bg_color', array(
    'label' => __('Header bar background color', 'wp-avalon'),
    'section' => 'avalon_header_colors_section',
    'priority' => 5
  )));
//    Header bar border color
  $wp_customize->add_setting('avalon_header_bar_border_color', array(
    'default' => '#2f3d5d',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_header_bar_border_color', array(
    'label' => __('Header bar bottom border color', 'wp-avalon'),
    'section' => 'avalon_header_colors_section',
    'priority' => 6
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
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_menu_text_color', array(
    'label' => __('Menu text color', 'wp-avalon'),
    'section' => 'avalon_menu_color_scheme',
    'priority' => 1
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
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_page_title_color', array(
    'label' => __('Single and Page title color', 'wp-avalon'),
    'section' => 'avalon_postpage_color_scheme',
    'priority' => 1
  )));

//    Single & Page tagline color
  $wp_customize->add_setting('avalon_page_tagline_color', array(
    'default' => '#FFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_page_tagline_color', array(
    'label' => __('Single and Page tagline color', 'wp-avalon'),
    'section' => 'avalon_postpage_color_scheme',
    'priority' => 2
  )));


//    Buttons color scheme section
  $wp_customize->add_section('avalon_buttons_color_scheme', array(
    'title' => __('Buttons color scheme', 'wp-avalon'),
    'priority' => 4,
    'panel' => 'general_colors'
  ));

//    Button bg color
  $wp_customize->add_setting('avalon_button_bg_color', array(
    'default' => '#19294c',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_bg_color', array(
    'label' => __('Buttons background color', 'wp-avalon'),
    'section' => 'avalon_buttons_color_scheme',
    'priority' => 1
  )));

//    Button border color
  $wp_customize->add_setting('avalon_button_border_color', array(
    'default' => '#0b1a3a',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_border_color', array(
    'label' => __('Buttons border color', 'wp-avalon'),
    'section' => 'avalon_buttons_color_scheme',
    'priority' => 2
  )));

//    Button text color
  $wp_customize->add_setting('avalon_button_text_color', array(
    'default' => '#FFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_button_text_color', array(
    'label' => __('Buttons text color', 'wp-avalon'),
    'section' => 'avalon_buttons_color_scheme',
    'priority' => 3
  )));

//    Button bg color hover
  $wp_customize->add_setting('avalon_hover_button_bg_color', array(
    'default' => '#0b1a3a',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_bg_color', array(
    'label' => __('Buttons hover background color', 'wp-avalon'),
    'section' => 'avalon_buttons_color_scheme',
    'priority' => 4
  )));

//    Button border color hover
  $wp_customize->add_setting('avalon_hover_button_border_color', array(
    'default' => '#0b1a3a',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_border_color', array(
    'label' => __('Buttons hover border color', 'wp-avalon'),
    'section' => 'avalon_buttons_color_scheme',
    'priority' => 5
  )));

//    Button text color hover
  $wp_customize->add_setting('avalon_hover_button_text_color', array(
    'default' => '#FFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_hover_button_text_color', array(
    'label' => __('Buttons hover text color', 'wp-avalon'),
    'section' => 'avalon_buttons_color_scheme',
    'priority' => 6
  )));

//    Secondary button text color hover
  $wp_customize->add_setting('avalon_secondary_button_color', array(
    'default' => '#19294c',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_button_color', array(
    'label' => __('Property sort buttons background color', 'wp-avalon'),
    'section' => 'avalon_buttons_color_scheme',
    'priority' => 7
  )));

//    Secondary button text color hover
  $wp_customize->add_setting('avalon_secondary_button_text_color', array(
    'default' => '#FFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_secondary_button_text_color', array(
    'label' => __('Property sort buttons text color', 'wp-avalon'),
    'section' => 'avalon_buttons_color_scheme',
    'priority' => 8
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
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_permalink_color', array(
    'label' => __('Permalinks color', 'wp-avalon'),
    'section' => 'avalon_permalinks_color_scheme',
    'priority' => 1
  )));

//    Permalink hover color
  $wp_customize->add_setting('avalon_permalink_hover_color', array(
    'default' => '#23527c',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'avalon_permalink_hover_color', array(
    'label' => __('Permalinks hover color', 'wp-avalon'),
    'section' => 'avalon_permalinks_color_scheme',
    'priority' => 2
  )));


//  --------------------------------------------------------------------------
//  Header settings
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('header_main_settings_control', array(
    'priority' => 31,
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
    'default' => '1',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_main_show_login_register_button', array(
    'label' => __('Show Login/Register button', 'wp-avalon'),
    'section' => 'header_main_settings_section',
    'type' => 'checkbox',
    'priority' => 1
  ));

  // Header image
  $wp_customize->add_section('header_image_settings_section', array(
    'title' => __('Header image', 'wp-avalon'),
    'panel' => 'header_main_settings_control',
    'priority' => 2,
  ));
  // Header image
  $wp_customize->add_setting('header_image', array(
    'default' => get_template_directory_uri() . '/static/images/default-header-image.jpg',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
    'label' => __('Header image', 'wp-avalon'),
    'section' => 'header_image_settings_section',
    'priority' => 1
  )));
//    Blackout color
  $wp_customize->add_setting('header_image__blackout_color', array(
    'default' => '#000000',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_image__blackout_color', array(
    'label' => __('Blackout color for header image', 'wp-avalon'),
    'section' => 'header_image_settings_section',
    'priority' => 2
  )));
//    Blackout opacity
  $wp_customize->add_setting('header_image__opacity_setting', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'default' => '0.3',
    'transport' => 'postMessage'
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
    'priority' => 3
  ));

  // Header image section settings
  $wp_customize->add_section('header_image_section_settings', array(
    'title' => __('Header image section settings', 'wp-avalon'),
    'panel' => 'header_main_settings_control',
    'priority' => 3,
  ));
  // Show fetured image in header 
  $wp_customize->add_setting('header_image_disable', array(
    'default' => '1',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_image_disable', array(
    'label' => __('Show "Header Image" section on front page', 'wp-avalon'),
    'section' => 'header_image_section_settings',
    'type' => 'checkbox',
    'priority' => 1
  ));
  // Front page header image height
  $wp_customize->add_setting('header_image_frontpage_height', array(
    'default' => '600',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_image_frontpage_height', array(
    'label' => __('Front page header image height', 'wp-avalon'),
    'section' => 'header_image_section_settings',
    'type' => 'number',
    'input_attrs' => array(
      'min' => 0,
      'max' => 1000,
      'step' => 1,
    ),
    'priority' => 2
  ));
  // Show fetured image in header on page & post page
  $wp_customize->add_setting('header_image_post_disable', array(
    'default' => '1',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_image_post_disable', array(
    'label' => __('Show "Header image" section on single and post page', 'wp-avalon'),
    'section' => 'header_image_section_settings',
    'type' => 'checkbox',
    'priority' => 3
  ));
  // Show fetured image in header instead header image 
  $wp_customize->add_setting('header_image_show_featured_image_in_head', array(
    'default' => '1',
    'sanitize_callback' => 'avalon_sanitize_callback',
  ));
  $wp_customize->add_control('header_image_show_featured_image_in_head', array(
    'label' => __('Show fetured image in header instead of header image (on single and post page)', 'wp-avalon'),
    'section' => 'header_image_section_settings',
    'type' => 'checkbox',
    'priority' => 4
  ));
  // Single page header image height
  $wp_customize->add_setting('header_image_single_height', array(
    'default' => '300',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_image_single_height', array(
    'label' => __('Single and post page header image height', 'wp-avalon'),
    'section' => 'header_image_section_settings',
    'type' => 'number',
    'input_attrs' => array(
      'min' => 0,
      'max' => 1000,
      'step' => 1,
    ),
    'priority' => 5
  ));

//    welcome section
  $wp_customize->add_section('header_welcome_section', array(
    'title' => __('Welcome section', 'wp-avalon'),
    'panel' => 'header_main_settings_control',
    'description' => '',
    'priority' => 4,
  ));

  // Disable welcome section
  $wp_customize->add_setting('header_welcome_disable', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_welcome_disable', array(
    'label' => __('Disable "welcome" section', 'wp-avalon'),
    'section' => 'header_welcome_section',
    'type' => 'checkbox',
    'priority' => 1
  ));
  // welcome title
  $wp_customize->add_setting('header_welcome_title', array(
    'default' => __('Welcome to WP Avalon', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_welcome_title', array(
    'label' => __('Welcome section title', 'wp-avalon'),
    'section' => 'header_welcome_section',
    'type' => 'text',
    'priority' => 2
  ));
  // welcome text
  $wp_customize->add_setting('header_welcome_text', array(
    'default' => __('WP Avalon - FREE wordpress theme. Created special for using with <a href="#">wp-property</a> plugin', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_welcome_text', array(
    'label' => __('Welcome section text', 'wp-avalon'),
    'description' => $shortcode_notice,
    'section' => 'header_welcome_section',
    'type' => 'textarea',
    'priority' => 3
  ));
  if (function_exists('ud_check_wp_property')) :

  else :
    // disable section
    $wp_customize->add_setting('header_welcome_property_search', array(
      'sanitize_callback' => 'avalon_closed_section'
    ));
    $wp_customize->add_control(new WP_Avalon_Theme_Support_WP_Property($wp_customize, 'header_welcome_property_search', array(
      'section' => 'header_welcome_section',
      'priority' => 4
    )));
    // description
    $wp_customize->add_setting('header_welcome_property_search_title', array(
      'default' => __('At that place you can enable default property search', 'wp-avalon'),
      'sanitize_callback' => 'avalon_sanitize_callback',
      'capability' => 'edit_theme_options',
      'transport' => 'postMessage'
    ));
    $wp_customize->add_control('header_welcome_property_search_title', array(
      'label' => __('"Property search" description', 'wp-avalon'),
      'description' => $shortcode_notice,
      'section' => 'header_welcome_section',
      'type' => 'textarea',
      'priority' => 5
    ));
  endif;

  if (function_exists('ud_check_wp_property')) :
//    Welcome section. Property search box settings
    $wp_customize->add_section('welcome_property_search_settings', array(
      'title' => __('Home Search settings', 'wp-avalon'),
      'panel' => 'header_main_settings_control',
      'description' => '',
      'priority' => 5,
    ));

    $wp_customize->add_setting('avalon_search_enable', array(
      'default' => ''
    ));

    $wp_customize->add_control('avalon_search_enable', array(
      'label' => __('Enable Site-wide Search', 'avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'checkbox',
    ));

    $wp_customize->add_setting('avalon_search_field_1', array(
      'default' => ''
    ));

    $wp_customize->add_setting('avalon_search_field_2', array(
      'default' => ''
    ));

    $wp_customize->add_setting('avalon_search_field_3', array(
      'default' => ''
    ));

    $wp_customize->add_setting('avalon_search_field_4', array(
      'default' => ''
    ));

    $wp_customize->add_setting('avalon_search_field_5', array(
      'default' => ''
    ));

    $wp_customize->add_setting('avalon_search_field_1_type', array(
      'default' => 'range_dropdown'
    ));

    $wp_customize->add_setting('avalon_search_field_2_type', array(
      'default' => 'range_dropdown'
    ));

    $wp_customize->add_setting('avalon_search_field_3_type', array(
      'default' => 'range_dropdown'
    ));

    $wp_customize->add_setting('avalon_search_field_4_type', array(
      'default' => 'range_dropdown'
    ));

    $wp_customize->add_setting('avalon_search_field_5_type', array(
      'default' => 'range_dropdown'
    ));

    global $wp_properties;
    $_attributes = array();
    if (!empty($wp_properties['searchable_attributes']) && is_array($wp_properties['searchable_attributes'])) {
      foreach ($wp_properties['searchable_attributes'] as $_attr_slug) {
        if (!empty($wp_properties['property_stats'][$_attr_slug])) {
          $_attributes[$_attr_slug] = $wp_properties['property_stats'][$_attr_slug];
        }
      }
    }
    $_attributes['s'] = __('Full Text', 'wp-avalon');
    $field_types = array(
      'range_dropdown' => 'Range Dropdown',
      'advanced_range_dropdown' => 'Advance Range Dropdown',
      'dropdown' => 'Dropdown',
      'input' => 'Text Input'
    );

    $wp_customize->add_control('avalon_search_field_1', array(
      'label' => __('Field 1', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $_attributes,
      'settings' => 'avalon_search_field_1'
    ));

    $wp_customize->add_control('avalon_search_field_1_type', array(
      'label' => __('Field 1 Type', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $field_types,
      'settings' => 'avalon_search_field_1_type'
    ));

    $wp_customize->add_control('avalon_search_field_2', array(
      'label' => __('Field 2', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $_attributes,
      'settings' => 'avalon_search_field_2'
    ));

    $wp_customize->add_control('avalon_search_field_2_type', array(
      'label' => __('Field 2 Type', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $field_types,
      'settings' => 'avalon_search_field_2_type'
    ));

    $wp_customize->add_control('avalon_search_field_3', array(
      'label' => __('Field 3', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $_attributes,
      'settings' => 'avalon_search_field_3'
    ));

    $wp_customize->add_control('avalon_search_field_3_type', array(
      'label' => __('Field 3 Type', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $field_types,
      'settings' => 'avalon_search_field_3_type'
    ));

    $wp_customize->add_control('avalon_search_field_4', array(
      'label' => __('Field 4', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $_attributes,
      'settings' => 'avalon_search_field_4'
    ));

    $wp_customize->add_control('avalon_search_field_4_type', array(
      'label' => __('Field 4 Type', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $field_types,
      'settings' => 'avalon_search_field_4_type'
    ));

    $wp_customize->add_control('avalon_search_field_5', array(
      'label' => __('Field 5', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $_attributes,
      'settings' => 'avalon_search_field_5'
    ));

    $wp_customize->add_control('avalon_search_field_5_type', array(
      'label' => __('Field 5 Type', 'wp-avalon'),
      'section' => 'welcome_property_search_settings',
      'type' => 'select',
      'choices' => $field_types,
      'settings' => 'avalon_search_field_5_type'
    ));
  endif;


//    Logo settings
  $wp_customize->add_section('header_logo_settings', array(
    'title' => __('Logo settings', 'wp-avalon'),
    'panel' => 'header_main_settings_control',
    'description' => '',
    'priority' => 6,
  ));
//    Logo icon
  $wp_customize->add_setting('header_logo_icon_settings', array(
    'default' => get_template_directory_uri() . '/static/images/logo-icon.png',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_icon_settings', array(
    'label' => __('Logo icon', 'wp-avalon'),
    'section' => 'header_logo_settings',
  )));
//    Logo img margin top
  $wp_customize->add_setting('header_logo_icon_margin_setting', array(
    'default' => '-5',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
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
//    Logo img margin top
  $wp_customize->add_setting('header_logo_icon_margin_right_setting', array(
    'default' => '10',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_logo_icon_margin_right_setting', array(
    'label' => __('Margin right in px', 'wp-avalon'),
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
    'default' => __('WP Avalon', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_logo_text_settings', array(
    'label' => __('Logo text', 'wp-avalon'),
    'section' => 'header_logo_settings',
  ));
//    Logo text color
  $wp_customize->add_setting('header_logo_text_color_settings', array(
    'default' => '#FFF',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_logo_text_color_settings', array(
    'label' => __('Logo Text Color', 'wp-avalon'),
    'section' => 'header_logo_settings',
  )));
//    Logo image
  $wp_customize->add_setting('header_logo_big_image_settings', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo_big_image_settings', array(
    'label' => __('Or load full logo image instead of logo with text', 'wp-avalon'),
    'section' => 'header_logo_settings',
  )));
//    Logo img margin top
  $wp_customize->add_setting('header_logo_img_margin_setting', array(
    'default' => '0',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
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
  $wp_customize->add_section('header_contactus_settings_section', array(
    'title' => __('Contact us settings', 'wp-avalon'),
    'panel' => 'header_main_settings_control',
    'priority' => 7,
  ));
  // Disable "Contact us" area
  $wp_customize->add_setting('header_contactus_disable_settings', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_contactus_disable_settings', array(
    'label' => __('Disable "Contact us" area', 'wp-avalon'),
    'section' => 'header_contactus_settings_section',
    'type' => 'checkbox',
    'priority' => 1
  ));
  // "Contact us" area title
  $wp_customize->add_setting('header_contactus_title_settings', array(
    'default' => __('CONTACT FORM', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_contactus_title_settings', array(
    'label' => __('"Contact us" area title', 'wp-avalon'),
    'section' => 'header_contactus_settings_section',
    'type' => 'text',
    'priority' => 2
  ));
  // "Contact us" area description
  $wp_customize->add_setting('header_contactus_description_settings', array(
    'default' => __('Quisque tincidunt ornare sapien, at commodo ante tristique non. Integer id tellus nisl. Donec eget nunc eget odio malesuada egestas.', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_contactus_description_settings', array(
    'label' => __('"Contact us" area description', 'wp-avalon'),
    'description' => $shortcode_notice,
    'section' => 'header_contactus_settings_section',
    'type' => 'textarea',
    'priority' => 3
  ));
  // "Contact us" form options
  $wp_customize->add_setting('header_contactus_form_settings', array(
    'default' => 'default',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options'
  ));
  $wp_customize->add_control('header_contactus_form_settings', array(
    'label' => __('Contact us foms settings', 'wp-avalon'),
    'section' => 'header_contactus_settings_section',
    'priority' => 4,
    'type' => 'radio',
    'choices' => array(
      'default' => __('Use default form (emails will be send on site admin email)', 'wp-avalon'),
      'custom' => __('Use custom form with shortcode', 'wp-avalon'),
    ),
  ));
  // "Contact us" custom form shortcode
  $wp_customize->add_setting('header_contactus_shortcode_settings', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_contactus_shortcode_settings', array(
    'label' => __('"Contact us" custom form shortcode', 'wp-avalon'),
    'description' => $shortcode_notice,
    'section' => 'header_contactus_settings_section',
    'type' => 'text',
    'priority' => 5
  ));
  // "Contact us" custom form CSS
  $wp_customize->add_setting('header_contactus_css_settings', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control('header_contactus_css_settings', array(
    'label' => __('"Contact us" custom form CSS', 'wp-avalon'),
    'section' => 'header_contactus_settings_section',
    'type' => 'textarea',
    'priority' => 6
  ));


//  Location area settings
  $wp_customize->add_section('header_location_area_section', array(
    'title' => __('"Location" area settings', 'wp-avalon'),
    'panel' => 'header_main_settings_control',
    'description' => '',
    'priority' => 8,
  ));
  // Disable "Location" area
  $wp_customize->add_setting('header_location_area_settings', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_location_area_settings', array(
    'label' => __('Disable "Location" area', 'wp-avalon'),
    'section' => 'header_location_area_section',
    'type' => 'checkbox',
    'priority' => 1
  ));
  // "Location" area title
  $wp_customize->add_setting('header_location_area_title', array(
    'default' => __('Location & Address', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
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
    'sanitize_callback' => 'avalon_sanitize_callback',
    'default' => '8300 Riverwind Ln #306, Raleigh, NC 27617, USA'
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
    'sanitize_callback' => 'avalon_sanitize_callback',
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
    'sanitize_callback' => 'avalon_sanitize_callback',
    'default' => __('Here you can add some decription', 'wp-avalon'),
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('header_location_area_description', array(
    'label' => __('"Location" area decrpiption', 'wp-avalon'),
    'description' => $shortcode_notice,
    'section' => 'header_location_area_section',
    'type' => 'textarea',
    'priority' => 5
  ));


// -----------------------------------------------------------------------------
//    Fronpage top widget area
// -----------------------------------------------------------------------------
  $wp_customize->add_panel('frontpage_top_widget_area_panel', array(
    'priority' => 33,
    'capability' => 'edit_theme_options',
    'title' => __('Frontpage multi-sidebar widget area', 'wp-avalon')
  ));

  // Fronpage top widget area settings
  $wp_customize->add_section('frontpage_top_widget_area_settings_section', array(
    'title' => __('Area settings', 'wp-avalon'),
    'panel' => 'frontpage_top_widget_area_panel',
    'priority' => 1,
  ));
  // disable section
  $wp_customize->add_setting('frontpage_top_widget_area_settings', array(
    'sanitize_callback' => 'avalon_sanitize_callback',
    'default' => ''
  ));
  $wp_customize->add_control('frontpage_top_widget_area_settings', array(
    'label' => __('Disable widget area', 'wp-avalon'),
    'section' => 'frontpage_top_widget_area_settings_section',
    'type' => 'checkbox',
    'priority' => 1
  ));


// -----------------------------------------------------------------------------
//    Fronpage About us widget area
// -----------------------------------------------------------------------------
  $wp_customize->add_panel('frontpage_aboutus_area_panel', array(
    'priority' => 34,
    'capability' => 'edit_theme_options',
    'title' => __('About us section', 'wp-avalon')
  ));

  // Fronpage About us widget area settings
  $wp_customize->add_section('frontpage_aboutus_area_settings_section', array(
    'title' => __('Settings', 'wp-avalon'),
    'panel' => 'frontpage_aboutus_area_panel',
    'priority' => 1,
  ));
  // Fronpage About us section disable
  $wp_customize->add_setting('frontpage_aboutus_area_settings', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('frontpage_aboutus_area_settings', array(
    'label' => __('Disable section', 'wp-avalon'),
    'section' => 'frontpage_aboutus_area_settings_section',
    'type' => 'checkbox',
    'priority' => 1
  ));


// -----------------------------------------------------------------------------
//    Focus widget area
// -----------------------------------------------------------------------------
  $wp_customize->add_panel('focus_section_panel', array(
    'priority' => 35,
    'capability' => 'edit_theme_options',
    'title' => __('Focus section settings', 'wp-avalon')
  ));

  // Focus widget area Settings
  $wp_customize->add_section('focus_section_settings', array(
    'title' => __('Settings', 'wp-avalon'),
    'panel' => 'focus_section_panel',
    'priority' => 1,
  ));
  // Focus widget area disable
  $wp_customize->add_setting('focus_section_disable_setting', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('focus_section_disable_setting', array(
    'label' => __('Disable section', 'wp-avalon'),
    'section' => 'focus_section_settings',
    'type' => 'checkbox',
    'priority' => 1
  ));
  // Focus widget area title
  $wp_customize->add_setting('focus_section_title_setting', array(
    'default' => __('Focus widget area title', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('focus_section_title_setting', array(
    'label' => __('Section title', 'wp-avalon'),
    'section' => 'focus_section_settings',
    'type' => 'text',
    'priority' => 2
  ));


//  --------------------------------------------------------------------------
//  About product section
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('about_products_area_panel', array(
    'priority' => 36,
    'capability' => 'edit_theme_options',
    'title' => __('About products section', 'wp-avalon')
  ));

  // WP Property desctiption settings
  $wp_customize->add_section('about_products_area_section', array(
    'title' => __('Settings', 'wp-avalon'),
    'panel' => 'about_products_area_panel',
    'priority' => 1,
  ));
  // WP Property desctiption section
  $wp_customize->add_setting('about_products_area_disable', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('about_products_area_disable', array(
    'label' => __('Disable section', 'wp-avalon'),
    'section' => 'about_products_area_section',
    'type' => 'checkbox',
    'priority' => 1
  ));


//  --------------------------------------------------------------------------
//  Default property overview settings
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('property_overview_area_panel', array(
    'priority' => 37,
    'capability' => 'edit_theme_options',
    'title' => __('WP-Property overview of listings', 'wp-avalon')
  ));

  // Property overview settings
  $wp_customize->add_section('property_overview_settings_section', array(
    'title' => __('Settings', 'wp-avalon'),
    'panel' => 'property_overview_area_panel',
    'priority' => 1,
  ));
  // Show default property overview section
  $wp_customize->add_setting('property_overview_disable', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('property_overview_disable', array(
    'label' => __('Disable section', 'wp-avalon'),
    'section' => 'property_overview_settings_section',
    'type' => 'checkbox',
    'priority' => 1
  ));
  $wp_customize->add_setting('property_overview_title', array(
    'default' => __('WP-Property overview of listings', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('property_overview_title', array(
    'label' => __('Section title', 'wp-avalon'),
    'section' => 'property_overview_settings_section',
    'type' => 'text',
    'priority' => 2
  ));


//  --------------------------------------------------------------------------
//  Flip section
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('flip_area_panel', array(
    'priority' => 38,
    'capability' => 'edit_theme_options',
    'title' => __('Flip widgets section', 'wp-avalon')
  ));

  // Flip settings
  $wp_customize->add_section('flip_settings_section', array(
    'title' => __('Settings', 'wp-avalon'),
    'panel' => 'flip_area_panel',
    'priority' => 1,
  ));
  // Show Flip section
  $wp_customize->add_setting('flip_section_disable', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('flip_section_disable', array(
    'label' => __('Disable section', 'wp-avalon'),
    'section' => 'flip_settings_section',
    'type' => 'checkbox',
    'priority' => 1
  ));
  // Flip section title
  $wp_customize->add_setting('flip_section_title', array(
    'default' => __('WP-Property addons', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('flip_section_title', array(
    'label' => __('Section title', 'wp-avalon'),
    'section' => 'flip_settings_section',
    'type' => 'text',
    'priority' => 2
  ));


//  --------------------------------------------------------------------------
//  Front page Container
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('avalon_frontpage_container', array(
    'priority' => 39,
    'capability' => 'edit_theme_options',
    'title' => __('Frontpage container section', 'wp-avalon')
  ));

  // FP settings
  $wp_customize->add_section('avalon_frontpage_container_settings', array(
    'title' => __('Frontpage container settings', 'wp-avalon'),
    'panel' => 'avalon_frontpage_container',
    'priority' => 1,
  ));
  // Show container
  $wp_customize->add_setting('avalon_frontpage_container_disable', array(
    'sanitize_callback' => 'avalon_sanitize_callback',
    'default' => 1
  ));
  $wp_customize->add_control('avalon_frontpage_container_disable', array(
    'label' => __('Disable default content on front page', 'wp-avalon'),
    'section' => 'avalon_frontpage_container_settings',
    'type' => 'checkbox',
    'priority' => 1
  ));


//  --------------------------------------------------------------------------
//  Footer
//  --------------------------------------------------------------------------
  $wp_customize->add_panel('footer_area_panel', array(
    'priority' => 40,
    'capability' => 'edit_theme_options',
    'title' => __('Footer section', 'wp-avalon')
  ));

//    FOOTER Logo settings
  $wp_customize->add_section('footer_logo_settings', array(
    'title' => __('Footer Logo settings', 'wp-avalon'),
    'panel' => 'footer_area_panel',
    'priority' => 1,
  ));
//    Footer Logo icon
  $wp_customize->add_setting('footer_logo_icon_settings', array(
    'default' => get_template_directory_uri() . '/static/images/footer-logo-icon.png',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_icon_settings', array(
    'label' => __('Logo icon', 'wp-avalon'),
    'section' => 'footer_logo_settings',
    'priority' => 1
  )));
//    Footer Logo img margin top
  $wp_customize->add_setting('footer_logo_icon_margin_setting', array(
    'default' => '-5',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('footer_logo_icon_margin_setting', array(
    'label' => __('Margin top in px', 'wp-avalon'),
    'section' => 'footer_logo_settings',
    'type' => 'number',
    'input_attrs' => array(
      'min' => -50,
      'max' => 50,
      'step' => 1,
    ),
    'priority' => 2
  ));
//    Footer Logo img margin right
  $wp_customize->add_setting('footer_logo_icon_margin_right_setting', array(
    'default' => '10',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('footer_logo_icon_margin_right_setting', array(
    'label' => __('Margin right in px', 'wp-avalon'),
    'section' => 'footer_logo_settings',
    'type' => 'number',
    'input_attrs' => array(
      'min' => -50,
      'max' => 50,
      'step' => 1,
    ),
    'priority' => 3
  ));
//    Footer logo text settings
  $wp_customize->add_setting('footer_logo_text_settings', array(
    'default' => __('WP Avalon', 'wp-avalon'),
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('footer_logo_text_settings', array(
    'label' => __('Logo text', 'wp-avalon'),
    'section' => 'footer_logo_settings',
    'priority' => 4
  ));
//    Footer Logo text color
  $wp_customize->add_setting('footer_logo_text_color_settings', array(
    'default' => '#a7a7a7',
    'sanitize_callback' => 'sanitize_hex_color',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_logo_text_color_settings', array(
    'label' => __('Logo Text Color', 'wp-avalon'),
    'section' => 'footer_logo_settings',
    'priority' => 5
  )));
//    Footer Logo image
  $wp_customize->add_setting('footer_logo_big_image_settings', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_big_image_settings', array(
    'label' => __('Or load full logo image instead of logo with text', 'wp-avalon'),
    'section' => 'footer_logo_settings',
    'priority' => 6
  )));
//    Footer Logo img margin top
  $wp_customize->add_setting('footer_logo_img_margin_setting', array(
    'default' => '0',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('footer_logo_img_margin_setting', array(
    'label' => __('Margin top in px', 'wp-avalon'),
    'section' => 'footer_logo_settings',
    'type' => 'number',
    'input_attrs' => array(
      'min' => -50,
      'max' => 50,
      'step' => 1,
    ),
    'priority' => 7
  ));

//    Copyrights
  $wp_customize->add_section('avalon_copyrights', array(
    'title' => __('Copyrights', 'wp-avalon'),
    'panel' => 'footer_area_panel',
    'priority' => 2,
  ));
//    copyright settings
  $wp_customize->add_setting('avalon_copyrights_settings', array(
    'default' => '',
    'sanitize_callback' => 'avalon_sanitize_callback',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage'
  ));
  $wp_customize->add_control('avalon_copyrights_control', array(
    'label' => __('Copyrights', 'wp-avalon'),
    'section' => 'avalon_copyrights',
    'settings' => 'avalon_copyrights_settings',
    'priority' => 1
  ));
}

add_action('customize_register', 'avalon_customize_register');

function avalon_closed_section($input)
{
  return $input;
}

function avalon_sanitize_callback($input)
{
  return $input;
}

function avalon_customize_css()
{
  ?>
  <style type="text/css">

    body header .container .navigation-box .navigation-wrapper {
      background-color: <?php echo get_theme_mod('avalon_header_bg_color', '#19294c'); ?>;
    }

    body header .container .logotype a span {
      color: <?php echo get_theme_mod('header_logo_text_color_settings', '#FFF'); ?>;
    }

    body .footer .footer-area .logotype a span {
      color: <?php echo get_theme_mod('footer_logo_text_color_settings', '#a7a7a7'); ?>;
    }

    body header {
      background-color: <?php echo get_theme_mod('avalon_header_bg_color', '#19294c'); ?>;
      border-bottom: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color', '#2f3d5d'); ?>;
      border-top: 1px solid <?php echo get_theme_mod('avalon_header_top_border_color', '#101a30'); ?>;
    }

    body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper {
      border-right: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color', '#2f3d5d'); ?>;
    }

    body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button {
      border-left: 1px solid <?php echo get_theme_mod('avalon_header_bottom_border_color', '#2f3d5d'); ?>;
    }

    body .header-bar {
      background-color: <?php echo get_theme_mod('avalon_header_bar_bg_color', '#0b1a3a'); ?>;
      border-bottom: 1px solid <?php echo get_theme_mod('avalon_header_bar_border_color', '#2f3d5d'); ?>;
    }

    body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button:hover,
    body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button.active {
      background-color: <?php echo get_theme_mod('avalon_header_bar_bg_color', '#0b1a3a'); ?>;
    }

    body header .container .navigation-box .navigation-wrapper .site-header-menu .main-navigation ul li a {
      color: <?php echo get_theme_mod('avalon_menu_text_color', '#FFFFFF'); ?>;
    }

    body main.main-content .secondary-header {
      background-color: <?php echo get_theme_mod('avalon_secondary_header_bg_color', '#2b5188'); ?>
    }

    body main.main-content .secondary-header .shi__blackout {
      background-color: <?php echo get_theme_mod('header_image__blackout_color', '#000000'); ?>;
      opacity: <?php echo get_theme_mod('header_image__opacity_setting', '0.3'); ?>;
    }

    body main.main-content .secondary-header h1.page-title {
      color: <?php echo get_theme_mod('avalon_page_title_color', '#FFF'); ?>;
    }

    body main.main-content .secondary-header h3.page-tagline {
      color: <?php echo get_theme_mod('avalon_page_tagline_color', '#FFF'); ?>;
    }

    body main.main-content .container .frontpage-avalon-features-area .featured-text-widget .ftw__title,
    body main.main-content .container .frontpage-property-description-area .featured-text-widget .ftw__title,
    body main.main-content .container .frontpage-overview-widget-area .fowa__container .property .property_div_box .wpp_overview_right_column .property_bottom,
    .wpp_property_overview_shortcode .wpp_grid_view.wpp_property_view_result .all-properties .property .property_div_box .wpp_overview_right_column .property_bottom {
      background-color: <?php echo get_theme_mod('avalon_header_bg_color', '#19294c'); ?>;
    }

    .wpp_property_overview_shortcode .wpp_grid_view.wpp_property_view_result .all-properties .property .property_div_box .property_featured_label span,
    .wpp_property_overview_shortcode .wpp_grid_view.wpp_property_view_result .all-properties .property .property_div_box .wpp_overview_left_column .property_type_label {
      background-color: <?php echo get_theme_mod('avalon_header_bg_color', '#19294c'); ?>;
    }

    body main.main-content .container .frontpage-about-us-area .aboutus-text-widget .atw__title,
    body main.main-content .container .frontpage-about-products-area .aboutus-text-widget .atw__title {
      background-color: <?php echo get_theme_mod('avalon_header_bg_color', '#19294c'); ?>;
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
      background-color: <?php echo get_theme_mod('avalon_secondary_button_color', '#19294c'); ?>;
      color: <?php echo get_theme_mod('avalon_secondary_button_text_color', '#FFF'); ?>;
    }

    body a.reg_link,
    body .btn-primary,
    body .header-bar #loginform p #wp-submit,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .first-page-btn a,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .previous-page-btn a,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .next-page-btn a,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .last-page-btn a,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .pages ul li a,
    body main.main-content .secondary-header .container .welcome-text-box .welcome-box-property-search .wpp_shortcode_search_form .wpp_search_elements > li.submit .submit,
    body main.main-content .container .frontpage-focus-widget-area .ffwa__container > div .ffwa__box .ffwa__bottom .ffwa__button a,
    .widget.widget_featuredpropertieswidget .view-all .btn,
    .wpp_widget.widget_featuredpropertieswidget .view-all .btn,
    .widget.widget_latestpropertieswidget .view-all .btn,
    .wpp_widget.widget_latestpropertieswidget .view-all .btn,
    .widget.widget_featuredpropertieswidget .property_widget_block .more .btn.btn-info,
    .wpp_widget.widget_featuredpropertieswidget .property_widget_block .more .btn.btn-info,
    .widget.widget_latestpropertieswidget .property_widget_block .more .btn.btn-info,
    .wpp_widget.widget_latestpropertieswidget .property_widget_block .more .btn.btn-info,
    body .wpp_feps_login_box .line .login_link .lost_pass_link,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map .gm-style #infowindow .infowindow_box .infowindow_right .ir__directions a, body main.main-content .container .content article .wpp_supermap_wrapper .super_map .gm-style-iw #infowindow .infowindow_box .infowindow_right .ir__directions a,
    body .btn-info,
    body a.btn-info,
    body .btn.btn-info,
    body a.btn.btn-info,
    body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button,
    body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button,
    body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button,
    .wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button,
    body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info,
    body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a,
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
      background-color: <?php echo get_theme_mod('avalon_button_bg_color', '#19294c'); ?>;
      border-color: <?php echo get_theme_mod('avalon_button_border_color', '#0b1a3a'); ?>;
      color: <?php echo get_theme_mod('avalon_button_text_color', '#FFF'); ?>;
    }

    body a.reg_link,
    body .btn-primary:hover,
    body .header-bar #loginform p #wp-submit:hover,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .first-page-btn a:hover,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .previous-page-btn a:hover,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .next-page-btn a:hover,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .last-page-btn a:hover,
    .wpp_property_overview_shortcode .properties_pagination .wpp_pagination_buttons_wrapper.pagination-numeric ul.property-overview-navigation .pages ul li a:hover,
    body main.main-content .secondary-header .container .welcome-text-box .welcome-box-property-search .wpp_shortcode_search_form .wpp_search_elements > li.submit .submit:hover,
    body main.main-content .container .frontpage-focus-widget-area .ffwa__container > div .ffwa__box .ffwa__bottom .ffwa__button a:hover,
    .widget.widget_featuredpropertieswidget .view-all .btn:hover,
    .wpp_widget.widget_featuredpropertieswidget .view-all .btn:hover,
    .widget.widget_latestpropertieswidget .view-all .btn:hover,
    .wpp_widget.widget_latestpropertieswidget .view-all .btn:hover,
    .widget.widget_featuredpropertieswidget .property_widget_block .more .btn.btn-info:hover,
    .wpp_widget.widget_featuredpropertieswidget .property_widget_block .more .btn.btn-info:hover,
    .widget.widget_latestpropertieswidget .property_widget_block .more .btn.btn-info:hover,
    .wpp_widget.widget_latestpropertieswidget .property_widget_block .more .btn.btn-info:hover,
    body .wpp_feps_login_box .line .login_link .lost_pass_link:hover,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map .gm-style #infowindow .infowindow_box .infowindow_right .ir__directions a, body main.main-content .container .content article .wpp_supermap_wrapper .super_map .gm-style-iw #infowindow .infowindow_box .infowindow_right .ir__directions a:hover,
    body .btn-info:hover,
    body a.btn-info:hover,
    body .btn.btn-info:hover,
    body a.btn.btn-info:hover,
    body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button:hover,
    body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button:hover,
    body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button:hover,
    .wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button:hover,
    body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li.active,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn:hover,
    body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info:hover,
    body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a:hover,
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
      background-color: <?php echo get_theme_mod('avalon_hover_button_bg_color', '#0b1a3a'); ?>;
      border-color: <?php echo get_theme_mod('avalon_hover_button_border_color', '#0b1a3a'); ?>;
      color: <?php echo get_theme_mod('avalon_hover_button_text_color', '#FFF'); ?>;
    }

    body a:not([class="btn"]),
    body a:not([class="btn-info"]) {
      color: <?php echo get_theme_mod('avalon_permalink_color', '#337ab7'); ?>;
    }

    body a:not([class="btn"]):focus,
    body a:not([class="btn-info"]):focus,
    body a:not([class="btn-info"]):hover,
    body a:not([class="btn-info"]):hover {
      color: <?php echo get_theme_mod('avalon_permalink_hover_color', '#23527c'); ?>;
    }

  </style>
  <?php
}

add_action('wp_head', 'avalon_customize_css');
