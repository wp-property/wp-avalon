//    Properties grid page
function property_height() {
    var widgets = jQuery('body .wpp_property_view_result');
    widgets.each(function(key, value) {
        var height = 0,
                columns = jQuery('.all-properties .property', jQuery(value));
        columns.each(function(key1, value1) {
            var currentHeight = jQuery(value1).outerHeight();
            if (currentHeight > height) {
                height = currentHeight;
            }
        });
        columns.height(height);
    });
}
function widget_property_height() {
    var widgets = jQuery('body .frontpage-overview-widget-area');
    widgets.each(function(key, value) {
        var height = 0,
                columns = jQuery('.fowa__container .property', jQuery(value));
        columns.each(function(key1, value1) {
            var currentHeight = jQuery(value1).outerHeight();
            if (currentHeight > height) {
                height = currentHeight;
            }
        });
        columns.height(height);
    });
}

function property_row() {
    var widgets = jQuery('body article .wpp_property_overview_shortcode');
    widgets.each(function(key, value) {
        var height = 0,
                columns = jQuery('.wpp_row_view .property_div', jQuery(value));
        columns.each(function(key1, value1) {
            var currentHeight = jQuery(value1).outerHeight();
            if (currentHeight > height) {
                height = currentHeight;
            }
        });
        columns.height(height);
    });
}

function frontpage_headlights() {
    var widgets = jQuery('body .frontpage-headlights');
    widgets.each(function(key, value) {
        var height = 0,
                height2 = 0,
                columns = jQuery('.fh__box', jQuery(value));
        columns2 = jQuery('.fh__box .fhb__excerpt', jQuery(value));
        columns.each(function(key1, value1) {
            var currentHeight = jQuery(value1).outerHeight();
            if (currentHeight > height) {
                height = currentHeight;
            }
        });
        columns.height(height);
        columns2.each(function(key1, value2) {
            var currentHeight2 = jQuery(value2).outerHeight();
            if (currentHeight2 > height2) {
                height2 = currentHeight2;
            }
        });
        columns2.height(height2);
    });
}
function frontpage_headlights_widgets() {
    var widgets = jQuery('body .frontpage-headlights-widget-area');
    widgets.each(function(key, value) {
        var height = 0,
                height2 = 0,
                columns = jQuery('.fhwa__box', jQuery(value));
        columns2 = jQuery('.fhwa__box > p', jQuery(value));
        columns.each(function(key1, value1) {
            var currentHeight = jQuery(value1).outerHeight();
            if (currentHeight > height) {
                height = currentHeight;
            }
        });
        columns.height(height);
        columns2.each(function(key1, value2) {
            var currentHeight2 = jQuery(value2).outerHeight();
            if (currentHeight2 > height2) {
                height2 = currentHeight2;
            }
        });
        columns2.height(height2);
    });
}

function property_grid(window_load) {
    var width = jQuery(window).width();
    if (!window_load) {
        property_height();
        property_row();
    } else {
        if (width < 768) {
            jQuery(window).load(function() {
                property_height();
                property_row();
            });
        } else {
            property_height();
            property_row();
            jQuery(window).load(function() {
                property_height();
                property_row();
            });
        }
    }
}

jQuery(window).load(function() {

//    Properties grid page
    property_grid(false);

//    Frontpage headlights
    frontpage_headlights();
    frontpage_headlights_widgets();
    widget_property_height();

});
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
        if (that.hasClass('ab__contactus')) {
            MapInit();
        }
    });
    jQuery(document).on('click', '.close-bar-box', function() {
        jQuery('.nav-additional .additional-button').removeClass('active');
        jQuery('.header-bar.active').slideUp('slow', 'swing');
        jQuery('.header-bar').removeClass('active');

    });


//    Tooltips
    jQuery('[data-toggle="tooltip"]').tooltip();

//    Carousel
    jQuery('.carousel').carousel();

//    Tabs
    jQuery('.nav-tabs a').click(function(e) {
        e.preventDefault();
        jQuery(this).tab('show');
        jQuery(document).trigger('wpp_redraw_supermaps');
    });
    if (!(jQuery('.frontpage-widgetaria-tabs .tab-content').children('.tab-pane').hasClass('active'))) {
        jQuery('.frontpage-widgetaria-tabs .tab-content .tab-pane:first').addClass('active');
    }

//    Frontpage widgetaria tabs titles
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

//    Main container height
    var HeaderHeight = jQuery('header.header').height();
    var FooterHeight = jQuery('footer.footer').height();
    jQuery('main.main-content').css('min-height', jQuery(window).height() - HeaderHeight - FooterHeight + 'px');

//    Default "Contact us" form ajax
    jQuery('.header-contact-form .submit-btn').on('click', function() {

        var default_contact_us = jQuery('.header-contact-form').serialize();

        jQuery.ajax({
            type: "POST",
            url: ajaxurl,
            beforeSend: function() {
                /* Check the Name for blank submission*/
                var user_name = document.forms["header-contact-form"]["dcf_user_name"].value;
                if (user_name == "" || user_name == null || user_name == 'undefined') {
                    jQuery('.header-contact-form #dcf_user_name').addClass('error-input');
                    show_form_message('Please, enter Your name');
                    return false;
                }

                /* Check the Email for invalid format */
                var customer_email = document.forms["header-contact-form"]["dcf_user_email"].value;
                var at_position = customer_email.indexOf("@");
                var dot_position = customer_email.lastIndexOf(".");
                if (at_position < 1 || dot_position < at_position + 2 || dot_position + 2 >= customer_email.length) {
                    jQuery('.header-contact-form #dcf_user_email').addClass('error-input');
                    show_form_message('Please, enter correct email');
                    return false;
                }
                jQuery('body').css('cursor', 'wait');
            },
            data: {
                action: 'default_contact_us',
                data: default_contact_us
            },
            success: function(result) {
                jQuery('.dcf__success_message_box').html(result).show('400').delay(4000).hide('400');
                jQuery('.header-contact-form .form-control').val('');
                jQuery('body').css('cursor', 'auto');
            },
            error: function(e) {
                alert('Error!');
                jQuery('body').css('cursor', 'auto');
            }
        });
        return false;

    });
    jQuery(document).on('focus', '.header-contact-form input.error-input', function() {
        jQuery(this).removeClass('error-input');
        jQuery('.dcf__message_box').hide('400').html('');
    });

    function show_form_message(message) {
        jQuery('.header-contact-form .dcf__message_box').html(message).show('400');
    }
});

jQuery(document).trigger('wpp_pagination_change_complete', function(e, data) {
    property_grid(true);
});
jQuery(document).bind('wpp_pagination_change_complete', function(e, data) {
    property_grid(true);
});
