<?php

/*
 * Theme support functions file
 */

function avalon_settings_page() {
    add_settings_section(
            'avalon_setting_section', 'Avalon theme options', 'avalon_settings_section', 'avalon_themesupport'
    );
    add_settings_field(
            'show_default_property_search', 'Show default property search tab on front page', 'avalon_frontpage_property_search_function', 'avalon_themesupport', 'avalon_setting_section'
    );
    register_setting('avalon_setting_section', 'show_default_property_search');

    add_settings_section(
            'avalon_setting_section', 'Contact us area', 'avalon_settings_section', 'avalon_themesupport'
    );
    add_settings_field(
            'contact_us_area_settings', 'Contuct us area settings', 'avalon_contact_us_area_settings', 'avalon_themesupport', 'avalon_setting_section'
    );
    register_setting('avalon_setting_section', 'contact_us_area_settings');
    
    add_settings_section(
            'avalon_setting_section', 'Contact us form', 'avalon_settings_section', 'avalon_themesupport'
    );
    add_settings_field(
            'contact_us_area_form', 'Contuct us form settings', 'avalon_contact_us_form', 'avalon_themesupport', 'avalon_setting_section'
    );
    register_setting('avalon_setting_section', 'contact_us_area_form');
}

add_action('admin_init', 'avalon_settings_page');

function avalon_settings_section() {
    
}

function avalon_frontpage_property_search_function() {
    echo '<p><input type="checkbox" name="show_default_property_search" value="1" ' . checked(1, get_option('show_default_property_search'), false) . ' /> check if Yes</p>';
}

function avalon_contact_us_area_settings() {
    $options = get_option('contact_us_area_settings');
    if (isset($options) && $options['value'] == '') {
        $options['value'] = '2'; 
    }
    echo '<p><label><input type="radio" name="contact_us_area_settings[value]" value="1" ' . checked(1, $options['value'], false) . ' />';
    echo __('Disable contact us area') . '</label></p>';

    echo '<p><label><input type="radio" name="contact_us_area_settings[value]" value="2" ' . checked(2, $options['value'], false) . ' />';
    echo __('Enable contact us area') . '</label></p>';
}

function avalon_contact_us_form() {
    $options = get_option('contact_us_area_form');
    if (isset($options) && $options['value'] == '') {
        $options['value'] = '1'; 
    }
    $shortcode = esc_attr($options['shortcode']);
    $form_styles = esc_attr($options['styles']);
    echo '<p><label><input type="radio" name="contact_us_area_form[value]" value="1" ' . checked(1, $options['value'], false) . ' />';
    echo __('Use default form') . '</label></p>';

    echo '<p><label><input type="radio" name="contact_us_area_form[value]" value="2" ' . checked(2, $options['value'], false) . ' />';
    echo __('Use shortcode') . '</label><br />';
    echo '<input type="text" value="'.$shortcode.'" name="contact_us_area_form[shortcode]" placeholder="' . __('Enter shortcode here') . '" /><br />';
    echo '<textarea name="contact_us_area_form[styles]" placeholder="' . __('Custom form css styles') . '">'.$form_styles.'</textarea></p>';
}
