<?php
/*
 * Theme support functions file
 */

function avalon_frontpage_settings_page() {
    add_settings_section(
            'avalon_frontpage_settings_page', __('Main site settings', 'wp-avalon'), 'avalon_settings_section', 'avalon_frontpage_themesupport'
    );
    add_settings_field(
            'show_default_property_search_value', __('Show default property search tab on front page', 'wp-avalon'), 'avalon_frontpage_property_search_function', 'avalon_frontpage_themesupport', 'avalon_frontpage_settings_page'
    );
    register_setting('avalon_frontpage_settings_page', 'show_default_property_search_value');
    
    add_settings_field(
            'show_login_register_button_value', __('Show Login/Register button in header', 'wp-avalon'), 'avalon_login_register_button', 'avalon_frontpage_themesupport', 'avalon_frontpage_settings_page'
    );
    register_setting('avalon_frontpage_settings_page', 'show_login_register_button_value');

    add_settings_field(
            'show_featured_image_in_head_value', __('Use featured images in header bar', 'wp-avalon'), 'featured_image_in_head', 'avalon_frontpage_themesupport', 'avalon_frontpage_settings_page'
    );
    register_setting('avalon_frontpage_settings_page', 'show_featured_image_in_head_value');

    add_settings_field(
            'show_head_img_or_featured_img_value', __('If page don`t have a featured image, use default header image', 'wp-avalon'), 'head_img_or_featured_img', 'avalon_frontpage_themesupport', 'avalon_frontpage_settings_page'
    );
    register_setting('avalon_frontpage_settings_page', 'show_head_img_or_featured_img_value');
}

add_action('admin_init', 'avalon_frontpage_settings_page');

function avalon_head_settings_page() {
    add_settings_section(
            'avalon_head_setting_section', __('Settings for "Contact us" header area', 'wp-avalon'), 'avalon_settings_section', 'avalon_head_themesupport'
    );
    add_settings_field(
            'contact_us_area_settings', __('Contact us area settings', 'wp-avalon'), 'avalon_contact_us_area_settings', 'avalon_head_themesupport', 'avalon_head_setting_section'
    );
    register_setting('avalon_head_setting_section', 'contact_us_area_settings');

    add_settings_field(
            'contact_us_area_form', __('Contact us form settings', 'wp-avalon'), 'avalon_contact_us_form', 'avalon_head_themesupport', 'avalon_head_setting_section'
    );
    register_setting('avalon_head_setting_section', 'contact_us_area_form');

    add_settings_field(
            'location_area', __('Location section', 'wp-avalon'), 'avalon_location_section', 'avalon_head_themesupport', 'avalon_head_setting_section'
    );
    register_setting('avalon_head_setting_section', 'location_area');
}

add_action('admin_init', 'avalon_head_settings_page');

function avalon_settings_section() {
    
}

function avalon_frontpage_property_search_function() {
    $val = get_option('show_default_property_search_value', '1');
    echo '<p><label><input type="radio" name="show_default_property_search_value" value="1" ' . checked(1, $val, false) . ' /> ' . __('Yes', 'wp-avalon') . '</label></p>';
    echo '<p><label><input type="radio" name="show_default_property_search_value" value="2" ' . checked(2, $val, false) . ' /> ' . __('No', 'wp-avalon') . '</label></p>';
}

function avalon_login_register_button() {
    $val = get_option('show_login_register_button_value', '1');
    echo '<p><label><input type="radio" name="show_login_register_button_value" value="1" ' . checked(1, $val, false) . ' /> ' . __('Yes', 'wp-avalon') . '</label></p>';
    echo '<p><label><input type="radio" name="show_login_register_button_value" value="2" ' . checked(2, $val, false) . ' /> ' . __('No', 'wp-avalon') . '</label></p>';
}

function featured_image_in_head() {
    $val = get_option('show_featured_image_in_head_value', '1');
    echo '<p><label><input type="radio" name="show_featured_image_in_head_value" value="1" ' . checked(1, $val, false) . ' /> ' . __('Yes', 'wp-avalon') . '</label></p>';
    echo '<p><label><input type="radio" name="show_featured_image_in_head_value" value="2" ' . checked(2, $val, false) . ' /> ' . __('No', 'wp-avalon') . '</label></p>';
}

function head_img_or_featured_img() {
    $val = get_option('show_head_img_or_featured_img_value', '2');
    echo '<p><label><input type="radio" name="show_head_img_or_featured_img_value" value="1" ' . checked(1, $val, false) . ' /> ' . __('Yes', 'wp-avalon') . '</label></p>';
    echo '<p><label><input type="radio" name="show_head_img_or_featured_img_value" value="2" ' . checked(2, $val, false) . ' /> ' . __('No', 'wp-avalon') . '</label></p>';
}

function avalon_contact_us_area_settings() {
    $options = get_option('contact_us_area_settings', array('value' => '2', 'title' => '', 'description' => ''));
    $title = $options['title'];
    $description = $options['description'];
    echo '<p><label><input type="radio" class="show_hide_input disable" name="contact_us_area_settings[value]" value="1" ' . checked(1, $options['value'], false) . ' />';
    echo __('Disable "Contact us" area', 'wp-avalon') . '</label></p>';

    echo '<p><label><input type="radio" class="show_hide_input enable" name="contact_us_area_settings[value]" value="2" ' . checked(2, $options['value'], false) . ' />';
    echo __('Enable "Contact us" area', 'wp-avalon') . '</label></p>';
    echo '<div class="enable-content ';
    if ($options['value'] == '2') {
        echo ' active';
    }
    echo '"><label>' . __('Section title', 'wp-avalon') . '</label><br /><input type="text" name="contact_us_area_settings[title]" value="' . $title . '" placeholder="' . __('Section title', 'wp-avalon') . '" /><br />';
    echo '<label>' . __('Section description', 'wp-avalon') . '</label><br /><textarea name="contact_us_area_settings[description]" placeholder="' . __('Section description', 'wp-avalon') . '">' . $description . '</textarea>';
    echo '</div>';
}

function avalon_contact_us_form() {
    $options = get_option('contact_us_area_form', array('value' => '1', 'default_form_email' => '', 'shortcode' => '', 'shortcode' => ''));
    if (!empty($options['default_form_email'])) {
        $default_email = $options['default_form_email'];
    } else {
        $default_email = get_option('admin_email');
    }
    $shortcode = esc_attr($options['shortcode']);
    $form_styles = esc_attr($options['styles']);
    echo '<p><label><input type="radio" class="show_hide_input disable" name="contact_us_area_form[value]" value="1" ' . checked(1, $options['value'], false) . ' />';
    echo __('Use default form', 'wp-avalon') . '</label><br />';
    echo '<span>'.__('Default email: Site Admin Email', 'wp-avalon').'</span><br />';
    echo '<input type="text" value="' . $default_email . '" name="contact_us_area_form[default_form_email]" placeholder="' . __('Your email for default form', 'wp-avalon') . '" /></p>';

    echo '<p><label><input type="radio" class="show_hide_input enable" name="contact_us_area_form[value]" value="2" ' . checked(2, $options['value'], false) . ' />';
    echo __('Use shortcode', 'wp-avalon') . '</label></p>';
    echo '<div class="enable-content ';
    if ($options['value'] == '2') {
        echo ' active';
    }
    echo '"><label>' . __('Shortcode', 'wp-avalon') . '</label><br /><input type="text" value="' . $shortcode . '" name="contact_us_area_form[shortcode]" placeholder="' . __('Enter shortcode here', 'wp-avalon') . '" /><br />';
    echo '<label>' . __('Custom CSS', 'wp-avalon') . '</label><br /><textarea name="contact_us_area_form[styles]" placeholder="' . __('Custom form css styles', 'wp-avalon') . '">' . $form_styles . '</textarea>';
    echo '</div>';
}

function avalon_location_section() {
    $options = get_option('location_area', array('value' => '1', 'map_img' => '1', 'title' => '', 'map_code' => '', 'map_image' => '', 'text' => ''));
    $title = $options['title'];
    $map_code = $options['map_code'];
    $map_image = $options['map_image'];
    $location_text = $options['text'];

    echo '<p><label><input type="radio" class="show_hide_input disable" name="location_area[value]" value="1" ' . checked(1, $options['value'], false) . ' />';
    echo __('Disable Location area', 'wp-avalon') . '</label></p>';

    echo '<p><label><input type="radio" class="show_hide_input enable" name="location_area[value]" value="2" ' . checked(2, $options['value'], false) . ' />';
    echo __('Enable Location area', 'wp-avalon') . '</label></p>';

    echo '<div class="enable-content ';
    if ($options['value'] == '2') {
        echo ' active';
    }
    echo '"><p><label>' . __('Section title', 'wp-avalon') . '</label><br />';
    echo '<input type="text" name="location_area[title]" value="' . $title . '" placeholder="' . __('Section title', 'wp-avalon') . '" /></p>';

    echo '<p><label><input type="radio" name="location_area[map_img]" value="1" ' . checked(1, $options['map_img'], false) . ' /> ' . __('Use google map', 'wp-avalon') . '</label></p>';
    ?>
    <div class="google-map-box">
        <input id="pac-input" name="location_area[map_code]" value="<?php echo $map_code; ?>" class="controls" type="text" placeholder="<?php _e('Search Box', 'wp-avalon') ?>">
        <div id="map" style="width: 550px; height: 300px;"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUNObksOUAhhcLRd1qGEyL_tnypxhtPPU&libraries=places&callback=initAutocomplete"
        async defer></script>

        <script type="text/javascript">

            function initAutocomplete() {
                geocoder = new google.maps.Geocoder();
                var address = document.getElementById("pac-input").value;

                geocoder.geocode({'address': address}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        //In this case it creates a marker, but you can get the lat and lng from the location.LatLng
                        map_box.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                            map: map_box,
                            position: results[0].geometry.location
                        });
                    } else {
                        alert("Geocode was not successful for the following reason: " + status);
                    }
                });
                map_box = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 0, lng: 0},
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                // Create the search box and link it to the UI element.
                var input = document.getElementById('pac-input');
                var searchBox = new google.maps.places.SearchBox(input);
                map_box.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                // Bias the SearchBox results towards current map's viewport.
                map_box.addListener('bounds_changed', function() {
                    searchBox.setBounds(map_box.getBounds());
                });

                var markers = [];
                // [START region_getplaces]
                // Listen for the event fired when the user selects a prediction and retrieve
                // more details for that place.
                searchBox.addListener('places_changed', function() {
                    var places = searchBox.getPlaces();

                    if (places.length == 0) {
                        return;
                    }

                    // Clear out the old markers.
                    markers.forEach(function(marker) {
                        marker.setMap(null);
                    });
                    markers = [];

                    // For each place, get the icon, name and location.
                    var bounds = new google.maps.LatLngBounds();
                    places.forEach(function(place) {
                        var icon = {
                            url: place.icon,
                            size: new google.maps.Size(71, 71),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(17, 34),
                            scaledSize: new google.maps.Size(25, 25)
                        };

                        // Create a marker for each place.
                        markers.push(new google.maps.Marker({
                            map: map_box,
                            icon: icon,
                            title: place.name,
                            position: place.geometry.location
                        }));

                        if (place.geometry.viewport) {
                            // Only geocodes have viewport.
                            bounds.union(place.geometry.viewport);
                        } else {
                            bounds.extend(place.geometry.location);
                        }
                    });
                    map_box.fitBounds(bounds);
                });
                // [END region_getplaces]
            }
        </script>
    </div>
    <?php
    echo '<p><input type="radio" name="location_area[map_img]" value="2" ' . checked(2, $options['map_img'], false) . ' /> <label>' . __('or add image', 'wp-avalon') . '</label><br />';
    ?>
    <div class="map-image-select">
        <input type="hidden" name="location_area[map_image]" id="img_path" value="<?php echo $map_image; ?>" />
        <img id="map_img"
        <?php if (!empty($map_image)) echo ' src="' . $map_image . '"'; ?>
             />
        <span class="map-img-select-button button button-primary" data-uploader_title="<?php _e('Select image', 'wp-avalon'); ?>"><?php _e('Select image', 'wp-avalon'); ?></span>
        <span class="map-img-delete-button button button-cancel"><?php _e('Delete image', 'wp-avalon'); ?></span>
    </div>
    <?php
    echo '<br /><p><label>' . __('Location area text section (you can use HTML)', 'wp-avalon') . '</label><br />';
    echo '<textarea name="location_area[text]" placeholder="' . __('Location area text section', 'wp-avalon') . '">' . $location_text . '</textarea></p>';
    echo '</div>';
}
