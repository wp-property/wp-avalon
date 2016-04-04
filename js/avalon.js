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

//    Tooltips
    jQuery('[data-toggle="tooltip"]').tooltip();

//    Carousel
    jQuery('.carousel').carousel();

//    Tabs
    jQuery('.nav-tabs a').click(function(e) {
        e.preventDefault();
        jQuery(this).tab('show');
    });

    jQuery('select:not(.selectpicker)').selectpicker({
        style: 'btn-default'
    });
});