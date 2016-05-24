<?php

include_once 'widget-avalon_widget_features.php';
include_once 'widget-avalon_widget_headlights.php';
include_once 'widget-avalon_widget_overview.php';
include_once 'widget-avalon_widget_property_addons.php';

add_action('widgets_init', function() {

  $avalon_sidebars = array(
      'sidebar-headlights' => 'sidebar-headlights',
      'sidebar-avalon-features' => 'sidebar-avalon-features',
      'sidebar-property-description' => 'sidebar-property-description',
      'sidebar-avalon-overview' => 'sidebar-avalon-overview',
      'sidebar-property-addons' => 'sidebar-property-addons',
  );

  /* Register sidebars */
  foreach ($avalon_sidebars as $avalon_sidebar):

    if ($avalon_sidebar == 'sidebar-headlights'):
      $avalon_sidebar_name = __('Focus section area', 'wp-avalon');
    elseif ($avalon_sidebar == 'sidebar-avalon-features'):
      $avalon_sidebar_name = __('About us features', 'wp-avalon');
    elseif ($avalon_sidebar == 'sidebar-property-description'):
      $avalon_sidebar_name = __('WP Property description area', 'wp-avalon');
    elseif ($avalon_sidebar == 'sidebar-avalon-overview') :
      $avalon_sidebar_name = __('Default property overview widgets', 'wp-avalon');
    elseif ($avalon_sidebar == 'sidebar-property-addons') :
      $avalon_sidebar_name = __('Default property addons widgets', 'wp-avalon');
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
