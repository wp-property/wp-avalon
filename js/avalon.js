jQuery(function() {

//    Header bar
    jQuery(document).on('click', '.nav-additional .additional-button', function() {
        var that = jQuery(this),
                bar = that.attr('data-wrap');
        jQuery('.hb__container#' + bar).toggleClass('active');
        jQuery('.header-bar').slideToggle('slow', 'swing');
    });

//    Tooltips
    jQuery('[data-toggle="tooltip"]').tooltip();

//    Carousel
    jQuery('.carousel').carousel();

//    Tabs
    jQuery('.nav-tabs a').click(function(e) {
        e.preventDefault();
        jQuery(this).tab('show');
    });

//    Select
//    jQuery('select').select2();
});