jQuery(document).ready(function() {

    /* Move our headlights widgets in the headlights panel */
    wp.customize.section('sidebar-widgets-sidebar-headlights').panel('headlights_widget_area_panel');
    wp.customize.section('sidebar-widgets-sidebar-headlights').priority('2');
    
    /* Move property overview widgets in the overview panel */
    wp.customize.section('sidebar-widgets-sidebar-avalon-overview').panel('property_overview_area_panel');
    wp.customize.section('sidebar-widgets-sidebar-avalon-overview').priority('2');

});


