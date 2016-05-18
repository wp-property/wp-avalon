<?php

/*
 * Template part for navigation in header
 * 
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
if (has_nav_menu('primary')) :
  echo '<nav id="site-navigation" class="main-navigation" role="navigation" data-template="template-parts/navigation/navigation-default">';
  wp_nav_menu(array(
      'theme_location' => 'primary',
      'menu_class' => 'primary-menu',
  ));
  echo '</nav><!-- .main-navigation -->';
endif;