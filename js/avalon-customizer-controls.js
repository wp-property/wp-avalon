jQuery(document).ready(function() {

    /* Move our headlights widgets in the headlights panel */
    wp.customize.section('sidebar-widgets-sidebar-headlights').panel('headlights_widget_area_panel');
    wp.customize.section('sidebar-widgets-sidebar-headlights').priority('2');

});


