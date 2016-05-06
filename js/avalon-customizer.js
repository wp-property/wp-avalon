jQuery(document).ready(function() {

    function box_width() {
        var boxes = jQuery('.frontpage-headlights .fh__container > div').size();
        var box_width = 12 / boxes;
        jQuery('.frontpage-headlights .fh__container > div').removeClass();
        jQuery('.frontpage-headlights .fh__container > div').addClass('col-md-' + box_width);
    }
    
    wp.customize('headlight_1_box_hidden_settings', function(e) {
        box_width();
    });
    wp.customize('headlight_2_box_hidden_settings', function(e) {
        box_width();
    });
    wp.customize('headlight_3_box_hidden_settings', function(e) {
        box_width();
    });
    wp.customize('headlight_4_box_hidden_settings', function(e) {
        box_width();
    });

});


