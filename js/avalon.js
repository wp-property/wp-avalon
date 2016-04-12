//    Properties grid page
function property_grid() {
    var height = 0,
            columns = jQuery('.wpp_property_overview_shortcode .all-properties .property');
    columns.each(function() {
        var currentHeight = jQuery(this).height();
        if (currentHeight > height)
        {
            height = currentHeight;
        }
    }
    );
    columns.height(height);
}

jQuery(function() {

//    Header bar
    jQuery(document).on('click', '.nav-additional .additional-button:not(.ab__logout)', function() {
        var that = jQuery(this),
                bar = that.attr('href');
        if (that.hasClass('active')) {
            jQuery('.nav-additional .additional-button').removeClass('active');
            jQuery('.header-bar.active').slideUp('slow', 'swing');
        } else {
            jQuery('.nav-additional .additional-button').removeClass('active');
            that.addClass('active');
            jQuery('.header-bar.active').slideUp('slow', 'swing');
            jQuery('.header-bar' + bar).slideToggle('slow', 'swing').addClass('active');
        }
    });

//    Properties grid page
    property_grid();

//    Tooltips
    jQuery('[data-toggle="tooltip"]').tooltip();

//    Carousel
    jQuery('.carousel').carousel();

//    Tabs
    jQuery('.nav-tabs a').click(function(e) {
        e.preventDefault();
        jQuery(this).tab('show');
    });
    if (!(jQuery('.frontpage-widgetaria-tabs .tab-content').children('.tab-pane').hasClass('active'))) {
        jQuery('.frontpage-widgetaria-tabs .tab-content .tab-pane:first').addClass('active');
    }

//    Frontpage widgetaria tabs
    jQuery('.tab-content div.tab-pane').each(function() {
        var tab_id = jQuery(this).attr('id'),
                widget_title = jQuery('.tab-pane#' + tab_id + ' .widget-title').html();
        jQuery('.frontpage-widgetaria-tabs .nav-tabs li a[href="#' + tab_id + '"]').html(widget_title);
    });

//    Selectpicker
    jQuery('select:not(.selectpicker)').selectpicker({
        style: 'btn-default'
    });

//    Main Navigation (responsive)
    jQuery(document).on('click', '.navigation-box .nav-button', function() {
        jQuery('.navigation-box').toggleClass('active');
    });
});

jQuery(document).bind('wpp_pagination_change_complete', function(e, data) {
    property_grid();
});