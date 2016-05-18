/* 
 * Admin page scripts
 */
jQuery(document).ready(function() {

  jQuery(document).on('click', '.aw__container .tab-list li', function() {
    var that = jQuery(this).attr('data-click');
    jQuery('.aw__container .tab-list li').removeClass('active');
    jQuery('.aw__container .tab-container .tab-content').removeClass('active');
    jQuery(this).addClass('active');
    jQuery('.aw__container .tab-container .tab-content#' + that).addClass('active');
    if (that == 'header_settings') {
      google.maps.event.trigger(map_box, 'resize');
    }
  });

  jQuery.fn.map_image_select = function(options) {

    var settings = jQuery.extend({
      url_input: '.url_input',
      image: '.image_input'
    }, options);

    var file_frame;
    var that = this;

    this.on('click', function(event) {

      event.preventDefault();

      // If the media frame already exists, reopen it.
      if (file_frame) {
        file_frame.open();
        return;
      }

      // Create the media frame.
      file_frame = wp.media.frames.file_frame = wp.media({
        title: that.data('uploader_title'),
        button: {
          text: that.data('uploader_button_text')
        },
        multiple: false  // Set to true to allow multiple files to be selected
      });

      // When an image is selected, run a callback.
      file_frame.on('select', function() {
        jQuery(settings.url_input).val(file_frame.state().get('selection').first().toJSON().url);
        jQuery(settings.image).attr('src', file_frame.state().get('selection').first().toJSON().url);
      });

      // Finally, open the modal
      file_frame.open();
    });
  };

  jQuery('.map-img-select-button').map_image_select({
    url_input: ".map-image-select #img_path",
    image: ".map-image-select #map_img"
  });

  jQuery(document).on('click', '.map-img-delete-button', function() {
    jQuery('.map-image-select #img_path').val('');
    jQuery('.map-image-select #map_img').removeAttr('src');
  });

  jQuery(document).on('click', 'input[type="radio"].show_hide_input', function() {
    if (jQuery(this).hasClass('enable')) {
      jQuery(this).parents('td').find('.enable-content').addClass('active');
    } else {
      jQuery(this).parents('td').find('.enable-content').removeClass('active');
    }
    google.maps.event.trigger(map_box, 'resize');
  });

  jQuery(document).on('click', '.add-features-input', function() {
    if (jQuery('.features-list').find('p').length <= 1) {

    } else {
      jQuery(this).parents('.features-list').find('p:last-child').clone();
    }
  });
  jQuery(document).on('click', '.remove-features-input', function() {
    if (jQuery('.features-list').find('p').length <= 1) {

    } else {
      jQuery(this).parents('p').remove();
    }
  });
});


