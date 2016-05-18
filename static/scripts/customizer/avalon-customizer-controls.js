jQuery(document).ready(function() {

  /* Move our headlights widgets in the headlights panel */
  wp.customize.section('sidebar-widgets-sidebar-headlights').panel('headlights_widget_area_panel');
  wp.customize.section('sidebar-widgets-sidebar-headlights').priority('2');

  /* Move property overview widgets in the overview panel */
  wp.customize.section('sidebar-widgets-sidebar-avalon-overview').panel('property_overview_area_panel');
  wp.customize.section('sidebar-widgets-sidebar-avalon-overview').priority('2');

  /* Move multi-sidebar area in the panel */
  wp.customize.section('sidebar-widgets-sidebar-frontpage').panel('frontpage_top_widget_area_panel');
  wp.customize.section('sidebar-widgets-sidebar-frontpage').priority('2');

  /* Move Avalon text area in the panel */
  wp.customize.section('sidebar-widgets-sidebar-avalon-features').panel('frontpage_features_area_panel');
  wp.customize.section('sidebar-widgets-sidebar-avalon-features').priority('2');

  /* Move WP property description area in the panel */
  wp.customize.section('sidebar-widgets-sidebar-property-description').panel('property_description_area_panel');
  wp.customize.section('sidebar-widgets-sidebar-property-description').priority('2');

  /* Move property addons area in the panel */
  wp.customize.section('sidebar-widgets-sidebar-property-addons').panel('addons_area_panel');
  wp.customize.section('sidebar-widgets-sidebar-property-addons').priority('2');

});


