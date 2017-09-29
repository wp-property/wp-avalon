jQuery(document).ready(function() {

  /* Move frontpage search sidebar in the panel */
  wp.customize.section('sidebar-widgets-frontpage-search-bar').panel('welcome_property_search_settings');
  wp.customize.section('sidebar-widgets-frontpage-search-bar').priority('1');

  /* Move multi-sidebar area in the panel */
  wp.customize.section('sidebar-widgets-sidebar-frontpage').panel('frontpage_top_widget_area_panel');
  wp.customize.section('sidebar-widgets-sidebar-frontpage').priority('2');
  
  /* Move about us area in the panel */
  wp.customize.section('sidebar-widgets-aboutus-section').panel('frontpage_aboutus_area_panel');
  wp.customize.section('sidebar-widgets-aboutus-section').priority('2');
  
  /* Move Focus widgets in the panel */
  wp.customize.section('sidebar-widgets-focus-section').panel('focus_section_panel');
  wp.customize.section('sidebar-widgets-focus-section').priority('2');

  /* Move property overview widgets in the panel */
  wp.customize.section('sidebar-widgets-overview-section').panel('property_overview_area_panel');
  wp.customize.section('sidebar-widgets-overview-section').priority('2');

  /* Move about products area in the panel */
  wp.customize.section('sidebar-widgets-about-products-section').panel('about_products_area_panel');
  wp.customize.section('sidebar-widgets-about-products-section').priority('2');

  /* Move property addons area in the panel */
  wp.customize.section('sidebar-widgets-flip-section').panel('flip_area_panel');
  wp.customize.section('sidebar-widgets-flip-section').priority('2');

});


