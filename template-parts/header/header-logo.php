<?php

/**
 * Template for site logo in header
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
echo '<a href="' . site_url() . '" title="' . get_bloginfo('name') . '" data-template="template-parts/header/header-logo">';

$logo_image = get_theme_mod('header_logo_big_image_settings', '');
$icon_url = get_theme_mod('header_logo_icon_settings', get_template_directory_uri() . '/static/images/logo-icon.png');
$logo_text = get_theme_mod('header_logo_text_settings', 'WP Avalon');
$margin_icon = get_theme_mod('header_logo_icon_margin_setting', '-4');
$margin_right_icon = get_theme_mod('header_logo_icon_margin_right_setting', '5');
$margin = get_theme_mod('header_logo_img_margin_setting', '0');
if (!empty($logo_image)) :
  echo '<img class="full_image_logo" style="margin-top: ' . $margin . 'px" alt="Logo" src="' . $logo_image . '">';
else :
  if (!empty($icon_url)) :

    echo '<img class="logo-icon" style="margin-right: ' . $margin_right_icon . 'px; margin-top: ' . $margin_icon . 'px" src="' . $icon_url . '" alt="Logo icon" />';
  endif;
  echo '<span>' . $logo_text . '</span>';
endif;
echo '</a>';
