jQuery(document).ready(function() {

    wp.customize('headlight_1_box_hidden_settings', function(e) {
        var boxes = jQuery('.frontpage-headlights .fh__container .col-md-3').size();
        var box_width = 12 / boxes;
        jQuery('.frontpage-headlights .fh__container > div').removeClass();
        jQuery('.frontpage-headlights .fh__container > div').addClass('col-md-' + box_width);
    });

});


