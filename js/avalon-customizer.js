(function($) {

    /* avalon contact us section */
    wp.customize('header_contuctus_title_settings', function(value) {
        value.bind(function(newval) {
            $('.hb__contact-form .hb__title').html(newval);
        });
    });
    wp.customize('header_contuctus_description_settings', function(value) {
        value.bind(function(newval) {
            $('.hb__contact-form .hbcf__description').html(newval);
        });
    });
    wp.customize('header_contuctus_disable_settings', function(value) {
        value.bind(function(newval) {
            if (newval != '1') {
                $('#contacts-bar').css('display', 'block');
                $('.additional-button.ab__contactus').css('display', 'block');
                $('.hb__location').parent('.col-md-6').removeClass('col-md-offset-3');
            } else {
                $('#contacts-bar').css('display', 'none');
                $('.additional-button.ab__contactus').css('display', 'none');
                $('.hb__location').parent('.col-md-6').addClass('col-md-offset-3');
            }
        });
    });
    
    /* avalon location section */
    wp.customize('header_location_area_settings', function(value) {
        value.bind(function(newval) {
            if (newval != '1') {
                $('.hb__location').css('display', 'block');
                $('.hb__contact-form').parent('.col-md-6').removeClass('col-md-offset-3');
            } else {
                $('.hb__location').css('display', 'none');
                $('.hb__contact-form').parent('.col-md-6').addClass('col-md-offset-3');
            }
        });
    });
    wp.customize('header_location_area_title', function(value) {
        value.bind(function(newval) {
            $('.hb__location .hb__title').html(newval);
        });
    });
    wp.customize('header_location_area_description', function(value) {
        value.bind(function(newval) {
            $('.hb__location .hbl__description').html(newval);
        });
    });
    
    /* Wellcome text box */
    wp.customize('header_wellcome_disable', function(value) {
        value.bind(function(newval) {
            if (newval != '1') {
                $('.wellcome-text-box').css('display', 'block');
            } else {
                $('.wellcome-text-box').css('display', 'none');
            }
        });
    });
    wp.customize('header_wellcome_title', function(value) {
        value.bind(function(newval) {
            $('.wellcome-text-box h1').html(newval);
        });
    });
    wp.customize('header_wellcome_text', function(value) {
        value.bind(function(newval) {
            $('.wellcome-text-box .wtb__container p').html(newval);
        });
    });
    wp.customize('header_wellcome_property_search_disable', function(value) {
        value.bind(function(newval) {
            if (newval != '1') {
                $('.wellcome-box-property-search').css('display', 'block');
            } else {
                $('.wellcome-box-property-search').css('display', 'none');
            }
        });
    });
    wp.customize('header_wellcome_property_search_title', function(value) {
        value.bind(function(newval) {
            $('.wellcome-text-box h3').html(newval);
        });
    });
    
    
    /* zerif_bigtitle_title */
    wp.customize('headlights_wa_title_setting', function(value) {
        value.bind(function(newval) {
            $('.fhwa__title').html(newval);
        });
    });
    wp.customize('headlights_wa_disable_setting', function(value) {
        value.bind(function(newval) {
            if (newval != '1') {
                $('.frontpage-headlights-widget-area').css('display', 'block');
            } else {
                $('.frontpage-headlights-widget-area').css('display', 'none');
            }
        });
    });

})(jQuery);


