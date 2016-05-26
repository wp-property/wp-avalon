<?php

include_once 'widget-avalon_widget_aboutus.php';
include_once 'widget-avalon_widget_focus.php';
include_once 'widget-avalon_widget_overview.php';
include_once 'widget-avalon_widget_flip.php';

add_action('widgets_init', function() {

  $avalon_sidebars = array(
      'about-us-section' => 'about-us-section',
      'focus-section' => 'focus-section',
      'about-products-section' => 'about-products-section',
      'overview-section' => 'overview-section',
      'flip-section' => 'flip-section',
  );

  /* Register sidebars */
  foreach ($avalon_sidebars as $avalon_sidebar):

    if ($avalon_sidebar == 'focus-section'):
      $avalon_sidebar_name = __('Focus section area', 'wp-avalon');
    elseif ($avalon_sidebar == 'about-us-section'):
      $avalon_sidebar_name = __('About us section', 'wp-avalon');
    elseif ($avalon_sidebar == 'about-products-section'):
      $avalon_sidebar_name = __('About products', 'wp-avalon');
    elseif ($avalon_sidebar == 'overview-section') :
      $avalon_sidebar_name = __('WP-Property overview of listings', 'wp-avalon');
    elseif ($avalon_sidebar == 'flip-section') :
      $avalon_sidebar_name = __('Flip widgets section', 'wp-avalon');
    endif;

    register_sidebar(
            array(
                'name' => $avalon_sidebar_name,
                'id' => $avalon_sidebar,
                'before_widget' => '',
                'after_widget' => ''
            )
    );

  endforeach;
});

add_action('admin_enqueue_scripts', 'avalon_sidebar_widget_scripts');

function avalon_sidebar_widget_scripts() {
  wp_enqueue_media();
  wp_enqueue_script('avalon_widget_scripts', get_template_directory_uri() . '/static/scripts/widgets/widget-media.js', false, '1.0', true);
}
