var wp_avalon = {
  /**
   * Property boxes equal height
   *
   * @author vorobjov@UD
   */
  property_height: function property_height() {
    jQuery('.wpp_property_view_result').each(function (k, v) {
      var tallest = 0;
      var box = jQuery('.all-properties .property', jQuery(v));
      box.css('height', 'auto');
      box.each(function () {
        if (jQuery(this).outerHeight() > tallest) {
          tallest = jQuery(this).outerHeight();
        }
      });
      box.each(function () {
        jQuery(this).height(tallest);
      });
    });
  },
  /**
   * Property boxes equal height in widget
   *
   * @author vorobjov@UD
   */
  widget_property_height: function widget_property_height() {
    var widgets = jQuery('body .frontpage-overview-widget-area');
    widgets.each(function (key, value) {
      var height = 0,
        columns = jQuery('.fowa__container .property', jQuery(value));
      columns.each(function (key1, value1) {
        var currentHeight = jQuery(value1).outerHeight();
        if (currentHeight > height) {
          height = currentHeight;
        }
      });
      columns.height(height);
    });
  },
  /**
   * Property boxes equal height for property shortcode
   *
   * @author vorobjov@UD
   */
  property_row: function property_row() {
    var widgets = jQuery('body article .wpp_property_overview_shortcode'),
      width = jQuery(window).width();
    if (width > 640) {
      widgets.each(function (key, value) {
        var height = 0,
          columns = jQuery('.wpp_row_view .property_div', jQuery(value));
        columns.each(function (key1, value1) {
          var currentHeight = jQuery(value1).outerHeight();
          if (currentHeight > height) {
            height = currentHeight;
          }
        });
        columns.height(height);
      });
    }
  },
  /**
   * Property overview shortcode boxes width for full width widgets
   *
   * @author vorobjov@UD
   */
  property_widget_grid_width: function property_widget_grid_width() {
    var widgets = jQuery('body article .widget.widget_wpp_property_overview');
    widgets.each(function (key, value) {
      var BoxWidth = jQuery('.wpp_property_view_result', jQuery(value)).width();
      if (BoxWidth >= 700) {
        jQuery('.wpp_property_view_result', jQuery(value)).addClass('widget_wpp_grid_view');
      }
    });
  },
  /**
   * Frontpage headlights equal height
   *
   * @author vorobjov@UD
   */
  frontpage_focus_widgets: function frontpage_focus_widgets() {
    var widgets = jQuery('body .frontpage-focus-widget-area');
    widgets.each(function (key, value) {
      var height = 0,
        height2 = 0,
        columns = jQuery('.ffwa__box', jQuery(value));
      columns2 = jQuery('.ffwa__box > p', jQuery(value));
      columns.each(function (key1, value1) {
        var currentHeight = jQuery(value1).outerHeight();
        if (currentHeight > height) {
          height = currentHeight;
        }
      });
      columns.height(height);
      columns2.each(function (key1, value2) {
        var currentHeight2 = jQuery(value2).height();
        if (currentHeight2 > height2) {
          height2 = currentHeight2;
        }
      });
      columns2.height(height2);
    });
  },
  /**
   * Property grid
   *
   * @author vorobjov@UD
   */
  property_grid: function property_grid(window_load) {
    var width = jQuery(window).width();
    if (!window_load) {
      wp_avalon.property_height();
      wp_avalon.property_row();
    } else {
      if (width < 768) {
        jQuery(window).load(function () {
          wp_avalon.property_height();
          wp_avalon.property_row();
        });
      } else {
        wp_avalon.property_height();
        wp_avalon.property_row();
        jQuery(window).load(function () {
          wp_avalon.property_height();
          wp_avalon.property_row();
        });
      }
    }
  }
};

jQuery(window).load(function () {

//    Properties grid page
  wp_avalon.property_widget_grid_width();
  wp_avalon.property_grid(false);

//    Frontpage headlights
  wp_avalon.frontpage_focus_widgets();
  wp_avalon.widget_property_height();


});
jQuery(function () {

  /**
   * Header bar
   *
   * @author vorobjov@UD
   */
  jQuery(document).on('click', '.nav-additional .additional-button:not(.ab__logout)', function () {
    var that = jQuery(this),
      bar = that.attr('href'),
      width = jQuery(window).width();
    if (width > 1000) {
      if (that.hasClass('active')) {
        jQuery('.nav-additional .additional-button').removeClass('active');
        jQuery('.header-bar.active').slideUp('slow', 'swing');
      } else {
        jQuery('.nav-additional .additional-button').removeClass('active');
        that.addClass('active');
        jQuery('.header-bar.active').slideUp('slow', 'swing');
        jQuery('.header-bar' + bar).slideToggle('slow', 'swing').addClass('active');
      }
    } else {
      jQuery('.header .navigation-box').removeClass('active');
      jQuery('body').removeClass('no-scrolled');
      jQuery('.header-bar' + bar).slideToggle('slow', 'swing').addClass('active');
    }
    if (that.hasClass('ab__contactus')) {
      MapInit();
    }
  });
  jQuery(document).on('click', '.close-bar-box', function () {
    jQuery('.nav-additional .additional-button').removeClass('active');
    jQuery('.header-bar.active').slideUp('slow', 'swing');
    jQuery('.header-bar').removeClass('active');
  });


  /**
   * Tooltips init
   *
   * @author vorobjov@UD
   */
  jQuery('[data-toggle="tooltip"]').tooltip();

  /**
   * Carousel init
   *
   * @author vorobjov@UD
   */
  jQuery('.carousel').carousel();

  /**
   * Tabs init
   *
   * @author vorobjov@UD
   */
  jQuery('.nav-tabs a').click(function (e) {
    e.preventDefault();
    jQuery(this).tab('show');
    jQuery(document).trigger('wpp_redraw_supermaps');
    jQuery(document).trigger('wpp_pagination_change_complete');
  });
  if (!(jQuery('.frontpage-widgetaria-tabs .tab-content').children('.tab-pane').hasClass('active'))) {
    jQuery('.frontpage-widgetaria-tabs .tab-content .tab-pane:first').addClass('active');
  }

  /**
   * Frontpage widgetaria tabs titles
   *
   * @author vorobjov@UD
   */
  jQuery('.tab-content div.tab-pane').each(function () {
    var tab_id = jQuery(this).attr('id'),
      widget_title = jQuery('.tab-pane#' + tab_id + ' .widget-title').html();
    jQuery('.frontpage-widgetaria-tabs .nav-tabs li a[href="#' + tab_id + '"]').html(widget_title);
  });

  /**
   * Selectpicker
   *
   * @author vorobjov@UD
   */
  jQuery('select:not(.selectpicker):not(.wpi_checkout_select_payment_method_dropdown):not(.rwmb-select-advanced)').selectpicker({
    style: 'btn-default'
  });

  /**
   * Main Navigation (responsive)
   *
   * @author vorobjov@UD
   */
  jQuery(document).on('click', '.navigation-box .nav-button', function () {
    var width = jQuery(window).width();
    jQuery('.navigation-box').toggleClass('active');
    jQuery('body').toggleClass('no-scrolled');
    if (width < 1000) {
      if (jQuery('.header-bar').hasClass('active')) {
        jQuery('.header-bar').removeClass('active').hide();
      }
    }
  });

  /**
   * Main container height
   *
   * @author vorobjov@UD
   */
  var HeaderHeight = jQuery('header.header').height();
  var FooterHeight = jQuery('footer.footer').height();
  jQuery('main.main-content').css('min-height', jQuery(window).height() - HeaderHeight - FooterHeight + 'px');

  /**
   * Default "Contact us" form ajax
   *
   * @author vorobjov@UD
   */
  jQuery('.header-contact-form .submit-btn').on('click', function () {

    var default_contact_us = jQuery('.header-contact-form').serialize();

    jQuery.ajax({
      type: "POST",
      url: avalon_ajax.ajaxurl,
      beforeSend: function () {
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
      success: function (result) {
        jQuery('.dcf__success_message_box').html(result).show('400').delay(4000).hide('400');
        jQuery('.header-contact-form .form-control').val('');
        jQuery('body').css('cursor', 'auto');
      },
      error: function (e) {
        alert('Error!');
        jQuery('body').css('cursor', 'auto');
      }
    });
    return false;

  });
  jQuery(document).on('focus', '.header-contact-form input.error-input', function () {
    jQuery(this).removeClass('error-input');
    jQuery('.dcf__message_box').hide('400').html('');
  });

  /**
   * Show message
   *
   * @author vorobjov@UD
   */
  function show_form_message(message) {
    jQuery('.header-contact-form .dcf__message_box').html(message).show('400');
  }

  /**
   * Flip addons
   *
   * @author vorobjov@UD
   */
  jQuery('.property_addon_box .pab__wrap').flip({
    trigger: 'hover'
  });
});

/**
 * Property grid after pagination complete
 *
 * @author vorobjov@UD
 */
jQuery(document).bind('wpp_pagination_change_complete', function (e, data) {
  wp_avalon.property_grid(true);
  jQuery('img').one('load', function () {
    wp_avalon.property_grid(true);
  });
});


