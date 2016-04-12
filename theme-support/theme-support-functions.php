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
}

add_action('admin_init', 'avalon_settings_page');

function avalon_settings_section() {
    
}

function avalon_frontpage_property_search_function() {
    echo '<p><input type="checkbox" name="show_default_property_search" value="1" ' . checked(1, get_option('show_default_property_search'), false) . ' /> check if Yes</p>';
}

function avalon_contact_us_area_settings() {
    $options = get_option('contact_us_area');
    print_r($options);
    if (isset($options)) {
        $options['value'] = '2'; 
    }
    $shortcode = get_option('contact_us_area_shortcode');
    echo '<p><input type="radio" name="contact_us_area[value]" value="1" ' . checked(1, $options['value'], false) . ' />';
    echo '<label>' . _e('Disable contact us area') . '</label></p>';

    echo '<p><input type="radio" name="contact_us_area[value]" value="2" ' . checked(2, $options['value'], false) . ' />';
    echo '<label>' . _e('Use default area') . '</label></p>';

    echo '<p><input type="radio" id="contact_us_area_custom" name="contact_us_area[value]" value="3" ' . checked(3, $options['value'], false) . ' />';
    echo '<label for="contact_us_area_custom">' . _e('Use custom with shortcode') . '</label>';
    echo '<div><input type="text" name="contact_us_area_shortcode" value="' . $shortcode . '" placeholder="' . _e('Enter shortcode here') . '" /></div></p>';
}
