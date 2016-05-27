<?php

/*
 * Template part for navigation in header
 * 
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$login_options_value = get_theme_mod('header_main_show_login_register_button', '1');
$contact_us_area = get_theme_mod('header_contactus_disable_settings', '');

echo '<div class="na__wrapper" data-template="template-parts/navigation/navigation-additional">';

if ($login_options_value == '1') :
  if (is_user_logged_in()) :
    echo '<a href="' . wp_logout_url(site_url()) . '" data-wrap="login-bar" class="additional-button ab__logout ab__profile" data-toggle="tooltip" data-placement="bottom" title="Logout">' . __('Logout', 'wp-avalon') . '</a>';
  else :
    echo '<a href="#login-bar" class="additional-button ab__profile" data-toggle="tooltip" data-placement="bottom" title="Login or register">' . __('Login or Register', 'wp-avalon') . '</a>';
  endif;
endif;
// -----------------
if ($contact_us_area != 1) :
  echo '<a href="#contacts-bar" class="additional-button ab__contactus" data-toggle="tooltip" data-placement="bottom" title="Contact us">' . __('Contact Us', 'wp-avalon') . '</a>';
endif;
echo '</div>';
