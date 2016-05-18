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
        $('.additional-button.ab__contactus').removeClass('hidden_block');
        $('.hb__location').parent('.col-md-6').removeClass('col-md-offset-3');
      } else {
        $('#contacts-bar').css('display', 'none');
        $('.additional-button.ab__contactus').addClass('hidden_block');
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
        $('.wellcome-text-box').removeClass('hidden_block');
      } else {
        $('.wellcome-text-box').addClass('hidden_block');
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
        $('.wellcome-box-property-search').removeClass('hidden_block');
      } else {
        $('.wellcome-box-property-search').addClass('hidden_block');
      }
    });
  });
  wp.customize('header_wellcome_property_search_title', function(value) {
    value.bind(function(newval) {
      $('.wellcome-text-box h3').html(newval);
    });
  });


  /* Avalon features */
  wp.customize('frontpage_features_area_settings', function(value) {
    value.bind(function(newval) {
      if (newval != '1') {
        $('.frontpage-avalon-features-area').removeClass('hidden_block');
      } else {
        $('.frontpage-avalon-features-area').addClass('hidden_block');
      }
    });
  });

  /* Headlights */
  wp.customize('headlights_wa_disable_setting', function(value) {
    value.bind(function(newval) {
      if (newval != '1') {
        $('.frontpage-headlights-widget-area').removeClass('hidden_block');
      } else {
        $('.frontpage-headlights-widget-area').addClass('hidden_block');
      }
    });
  });
  wp.customize('headlights_wa_title_setting', function(value) {
    value.bind(function(newval) {
      $('.fhwa__title').html(newval);
    });
  });

  /* Property overview */
  wp.customize('property_overview_disable', function(value) {
    value.bind(function(newval) {
      if (newval != '1') {
        $('.frontpage-overview-widget-area').removeClass('hidden_block');
      } else {
        $('.frontpage-overview-widget-area').addClass('hidden_block');
      }
    });
  });
  wp.customize('property_overview_title', function(value) {
    value.bind(function(newval) {
      $('.frontpage-overview-widget-area .fowa__title').html(newval);
    });
  });

  /* Property description area */
  wp.customize('property_description_disable', function(value) {
    value.bind(function(newval) {
      if (newval != '1') {
        $('.frontpage-property-description-area').removeClass('hidden_block');
      } else {
        $('.frontpage-property-description-area').addClass('hidden_block');
      }
    });
  });

  /* Property add-ons */
  wp.customize('addons_disable', function(value) {
    value.bind(function(newval) {
      if (newval != '1') {
        $('.frontpage-property-addons-area').removeClass('hidden_block');
      } else {
        $('.frontpage-property-addons-area').addClass('hidden_block');
      }
    });
  });
  wp.customize('addons_section_title', function(value) {
    value.bind(function(newval) {
      $('.frontpage-property-addons-area .fpaa__title').html(newval);
    });
  });

  /* show login\register button */
  wp.customize('header_main_show_login_register_button', function(value) {
    value.bind(function(newval) {
      if (newval != '1') {
        $('.nav-additional .additional-button.ab__profile').addClass('hidden_block');
      } else {
        $('.nav-additional .additional-button.ab__profile').removeClass('hidden_block');
      }
    });
  });

  /* Header image */
  wp.customize('header_image_disable', function(value) {
    value.bind(function(newval) {
      if (newval != '1') {
        $('.secondary-header').addClass('hidden_block');
      } else {
        $('.secondary-header').removeClass('hidden_block');
      }
    });
  });
  wp.customize('header_image', function(value) {
    value.bind(function(newval) {
      console.log(newval);
      $('.secondary-header .secondary-header-image').css('background-image', 'url(' + newval + ')');
    });
  });
  wp.customize('header_image__blackout_color', function(value) {
    value.bind(function(newval) {
      console.log(newval);
      $('.secondary-header .shi__blackout').css('background-color', newval);
    });
  });
  wp.customize('header_image__opacity_setting', function(value) {
    value.bind(function(newval) {
      console.log(newval);
      $('.secondary-header .shi__blackout').css('opacity', newval);
    });
  });

  /* Logotype HEADER */
  wp.customize('header_logo_text_settings', function(value) {
    value.bind(function(newval) {
      $('.header .logotype a span').html(newval);
    });
  });
  wp.customize('header_logo_text_color_settings', function(value) {
    value.bind(function(newval) {
      $('.header .logotype a span').css('color', newval);
    });
  });
  wp.customize('header_logo_icon_margin_setting', function(value) {
    value.bind(function(newval) {
      $('.header .logotype a img').css('margin-top', newval + 'px');
    });
  });
  wp.customize('header_logo_icon_margin_right_setting', function(value) {
    value.bind(function(newval) {
      $('.header .logotype a img').css('margin-right', newval + 'px');
    });
  });
  wp.customize('header_logo_icon_settings', function(value) {
    value.bind(function(newval) {
      $('.header .logotype a img').attr('src', newval);
    });
  });
  wp.customize('header_logo_img_margin_setting', function(value) {
    value.bind(function(newval) {
      $('.header .logotype .full_image_logo').attr('margin-top', newval + 'px');
    });
  });

  /* Logotype FOOTER */
  wp.customize('footer_logo_text_settings', function(value) {
    value.bind(function(newval) {
      $('.footer .logotype a span').html(newval);
    });
  });
  wp.customize('footer_logo_text_color_settings', function(value) {
    value.bind(function(newval) {
      $('.footer .logotype a span').css('color', newval);
    });
  });
  wp.customize('footer_logo_icon_margin_setting', function(value) {
    value.bind(function(newval) {
      $('.footer .logotype a img').css('margin-top', newval + 'px');
    });
  });
  wp.customize('footer_logo_icon_margin_right_setting', function(value) {
    value.bind(function(newval) {
      $('.footer .logotype a img').css('margin-right', newval + 'px');
    });
  });
  wp.customize('footer_logo_icon_settings', function(value) {
    value.bind(function(newval) {
      $('.footer .logotype a img').attr('src', newval);
    });
  });
  wp.customize('footer_logo_img_margin_setting', function(value) {
    value.bind(function(newval) {
      $('.footer .logotype .full_image_logo').attr('margin-top', newval + 'px');
    });
  });

  /* copyrights */
  wp.customize('avalon_copyrights_settings', function(value) {
    value.bind(function(newval) {
      $('.footer .copyrights p').html(newval);
    });
  });


  /* Color scheme */
  wp.customize('avalon_header_bg_color', function(value) {
    value.bind(function(newval) {
      $('body header').css('background-color', newval);
      $('body main.main-content .container .frontpage-avalon-features-area .featured-text-widget .ftw__title').css('background-color', newval);
      $('body main.main-content .container .frontpage-property-description-area .featured-text-widget .ftw__title').css('background-color', newval);
      $('body main.main-content .container .frontpage-overview-widget-area .fowa__container .property .property_div_box .wpp_overview_right_column .property_bottom').css('background-color', newval);
      $('.wpp_property_overview_shortcode .wpp_grid_view.wpp_property_view_result .all-properties .property .property_div_box .wpp_overview_right_column .property_bottom').css('background-color', newval);
    });
  });
  wp.customize('avalon_header_top_border_color', function(value) {
    value.bind(function(newval) {
      $('body header').css('border-top-color', newval);
    });
  });
  wp.customize('avalon_header_bottom_border_color', function(value) {
    value.bind(function(newval) {
      $('body header').css('border-bottom-color', newval);
      $('body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper').css('border-right-color', newval);
      $('body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button').css('border-left-color', newval);
    });
  });
  wp.customize('avalon_secondary_header_bg_color', function(value) {
    value.bind(function(newval) {
      $('body main.main-content .secondary-header').css('background-color', newval);
    });
  });
  wp.customize('avalon_header_bar_bg_color', function(value) {
    value.bind(function(newval) {
      $('body .header-bar').css('background-color', newval);
      $('body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button:hover').css('background-color', newval);
      $('body header .container .navigation-box .navigation-wrapper .nav-additional .na__wrapper .additional-button.active').css('background-color', newval);
    });
  });
  wp.customize('avalon_header_bar_border_color', function(value) {
    value.bind(function(newval) {
      $('body .header-bar').css('border-bottom-color', newval);
    });
  });

  wp.customize('avalon_menu_text_color', function(value) {
    value.bind(function(newval) {
      $('body header .container .navigation-box .navigation-wrapper .site-header-menu .main-navigation > div > ul > li > a').css('color', newval);
    });
  });
  wp.customize('avalon_page_title_color', function(value) {
    value.bind(function(newval) {
      $('body main.main-content .secondary-header h1.page-title').css('color', newval);
    });
  });
  wp.customize('avalon_page_tagline_color', function(value) {
    value.bind(function(newval) {
      $('body main.main-content .secondary-header h3.page-tagline').css('color', newval);
    });
  });

  wp.customize('avalon_button_bg_color', function(value) {
    value.bind(function(newval) {
      console.log(newval);
      $('.btn-info').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button').css('background-color', newval);
      $('body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button').css('background-color', newval);
      $('.wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button').css('background-color', newval);
      $('body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li').css('background-color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn').css('background-color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a').css('background-color', newval);
      $('body input[type="button"]').css('background-color', newval);
      $('body input[type="submit"]').css('background-color', newval);
      $('body input.submit-btn').css('background-color', newval);
      $('body button.submit-btn').css('background-color', newval);
      $('body a.submit-btn').css('background-color', newval);
      $('body span.submit-btn').css('background-color', newval);
      $('body input.submit').css('background-color', newval);
      $('body button.submit').css('background-color', newval);
      $('body a.submit').css('background-color', newval);
      $('body button[type="submit"]').css('background-color', newval);
      $('body input.wpp_feps_submit_form').css('background-color', newval);
      $('body button.wpp_feps_submit_form').css('background-color', newval);
      $('body a.wpp_feps_submit_form').css('background-color', newval);
      $('body input.search_b').css('background-color', newval);
      $('body button.search_b').css('background-color', newval);
      $('body a.search_b').css('background-color', newval);
      $('body input.show_more.btn').css('background-color', newval);
      $('body button.show_more.btn').css('background-color', newval);
      $('body a.show_more.btn').css('background-color', newval);
      $('body p.view-all a.btn').css('background-color', newval);
      $('body p.more a.btn').css('background-color', newval);
    });
  });
  wp.customize('avalon_button_border_color', function(value) {
    value.bind(function(newval) {
      $('.btn-info').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button').css('border-color', newval);
      $('body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button').css('border-color', newval);
      $('body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button').css('border-color', newval);
      $('.wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button').css('border-color', newval);
      $('body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li').css('border-color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn').css('border-color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info').css('border-color', newval);
      $('body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a').css('border-color', newval);
      $('body input[type="button"]').css('border-color', newval);
      $('body input[type="submit"]').css('border-color', newval);
      $('body input.submit-btn').css('border-color', newval);
      $('body button.submit-btn').css('border-color', newval);
      $('body a.submit-btn').css('border-color', newval);
      $('body span.submit-btn').css('border-color', newval);
      $('body input.submit').css('border-color', newval);
      $('body button.submit').css('border-color', newval);
      $('body a.submit').css('border-color', newval);
      $('body button[type="submit"]').css('border-color', newval);
      $('body input.wpp_feps_submit_form').css('border-color', newval);
      $('body button.wpp_feps_submit_form').css('border-color', newval);
      $('body a.wpp_feps_submit_form').css('border-color', newval);
      $('body input.search_b').css('border-color', newval);
      $('body button.search_b').css('border-color', newval);
      $('body a.search_b').css('border-color', newval);
      $('body input.show_more.btn').css('border-color', newval);
      $('body button.show_more.btn').css('border-color', newval);
      $('body a.show_more.btn').css('border-color', newval);
      $('body p.view-all a.btn').css('border-color', newval);
      $('body p.more a.btn').css('border-color', newval);
    });
  });
  wp.customize('avalon_button_text_color', function(value) {
    value.bind(function(newval) {
      $('.btn-info').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button').css('color', newval);
      $('body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button').css('color', newval);
      $('body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button').css('color', newval);
      $('.wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button').css('color', newval);
      $('body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li').css('color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn').css('color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info').css('color', newval);
      $('body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a').css('color', newval);
      $('body input[type="button"]').css('color', newval);
      $('body input[type="submit"]').css('color', newval);
      $('body input.submit-btn').css('color', newval);
      $('body button.submit-btn').css('color', newval);
      $('body a.submit-btn').css('color', newval);
      $('body span.submit-btn').css('color', newval);
      $('body input.submit').css('color', newval);
      $('body button.submit').css('color', newval);
      $('body a.submit').css('color', newval);
      $('body button[type="submit"]').css('color', newval);
      $('body input.wpp_feps_submit_form').css('color', newval);
      $('body button.wpp_feps_submit_form').css('color', newval);
      $('body a.wpp_feps_submit_form').css('color', newval);
      $('body input.search_b').css('color', newval);
      $('body button.search_b').css('color', newval);
      $('body a.search_b').css('color', newval);
      $('body input.show_more.btn').css('color', newval);
      $('body button.show_more.btn').css('color', newval);
      $('body a.show_more.btn').css('color', newval);
      $('body p.view-all a.btn').css('color', newval);
      $('body p.more a.btn').css('color', newval);
    });
  });
  wp.customize('avalon_hover_button_bg_color', function(value) {
    value.bind(function(newval) {
      $('.btn-info:hover').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button:hover').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button:hover').css('background-color', newval);
      $('body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button:hover').css('background-color', newval);
      $('.wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button:hover').css('background-color', newval);
      $('body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li:hover').css('background-color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn:hover').css('background-color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info:hover').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a:hover').css('background-color', newval);
      $('body input[type="button"]:hover').css('background-color', newval);
      $('body input[type="submit"]:hover').css('background-color', newval);
      $('body input.submit-btn:hover').css('background-color', newval);
      $('body button.submit-btn:hover').css('background-color', newval);
      $('body a.submit-btn:hover').css('background-color', newval);
      $('body span.submit-btn:hover').css('background-color', newval);
      $('body input.submit:hover').css('background-color', newval);
      $('body button.submit:hover').css('background-color', newval);
      $('body a.submit:hover').css('background-color', newval);
      $('body button[type="submit"]:hover').css('background-color', newval);
      $('body input.wpp_feps_submit_form:hover').css('background-color', newval);
      $('body button.wpp_feps_submit_form:hover').css('background-color', newval);
      $('body a.wpp_feps_submit_form:hover').css('background-color', newval);
      $('body input.search_b:hover').css('background-color', newval);
      $('body button.search_b:hover').css('background-color', newval);
      $('body a.search_b:hover').css('background-color', newval);
      $('body input.show_more.btn:hover').css('background-color', newval);
      $('body button.show_more.btn:hover').css('background-color', newval);
      $('body a.show_more.btn:hover').css('background-color', newval);
      $('body p.view-all a.btn:hover').css('background-color', newval);
      $('body p.more a.btn:hover').css('background-color', newval);
    });
  });
  wp.customize('avalon_hover_button_border_color', function(value) {
    value.bind(function(newval) {
      $('.btn-info:hover').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button:hover').css('border-color', newval);
      $('body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button:hover').css('border-color', newval);
      $('body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button:hover').css('border-color', newval);
      $('.wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button:hover').css('border-color', newval);
      $('body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li:hover').css('border-color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn:hover').css('border-color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info:hover').css('border-color', newval);
      $('body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a:hover').css('border-color', newval);
      $('body input[type="button"]:hover').css('border-color', newval);
      $('body input[type="submit"]:hover').css('border-color', newval);
      $('body input.submit-btn:hover').css('border-color', newval);
      $('body button.submit-btn:hover').css('border-color', newval);
      $('body a.submit-btn:hover').css('border-color', newval);
      $('body span.submit-btn:hover').css('border-color', newval);
      $('body input.submit:hover').css('border-color', newval);
      $('body button.submit:hover').css('border-color', newval);
      $('body a.submit:hover').css('border-color', newval);
      $('body button[type="submit"]:hover').css('border-color', newval);
      $('body input.wpp_feps_submit_form:hover').css('border-color', newval);
      $('body button.wpp_feps_submit_form:hover').css('border-color', newval);
      $('body a.wpp_feps_submit_form:hover').css('border-color', newval);
      $('body input.search_b:hover').css('border-color', newval);
      $('body button.search_b:hover').css('border-color', newval);
      $('body a.search_b:hover').css('border-color', newval);
      $('body input.show_more.btn:hover').css('border-color', newval);
      $('body button.show_more.btn:hover').css('border-color', newval);
      $('body a.show_more.btn:hover').css('border-color', newval);
      $('body p.view-all a.btn:hover').css('border-color', newval);
      $('body p.more a.btn:hover').css('border-color', newval);
    });
  });
  wp.customize('avalon_hover_button_text_color', function(value) {
    value.bind(function(newval) {
      $('.btn-info:hover').css('background-color', newval);
      $('body main.main-content .container .frontpage-headlights .fh__box .fhb__more .fhb__more_button:hover').css('color', newval);
      $('body main.main-content .container .frontpage-headlights .view-more-headlights .view-more-headlights-button:hover').css('color', newval);
      $('body main.main-content .container .content article .wpp_feps_form ul.feps_property_input_fields .qq-upload-button:hover').css('color', newval);
      $('.wpp_property_overview_shortcode .wpp_row_view .property_div .wpp_overview_feps_column .wpp_overview_data li.actions ul li a.button:hover').css('color', newval);
      $('body main.main-content .container .content article .wpp_feps_sponsored_listing .wpp_feps_step_tabs li:hover').css('color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .show_more.btn:hover').css('color', newval);
      $('body main.main-content .container .content article .wpp_supermap_wrapper .super_map_list .super_map_list_property .property_in_list ul li.supermap_list_view_property .btn-info:hover').css('color', newval);
      $('body main.main-content .container .frontpage-headlights-widget-area .fhwa__container > div .fhwa__box .fhwa__bottom .fhwa__button a:hover').css('color', newval);
      $('body input[type="button"]:hover').css('color', newval);
      $('body input[type="submit"]:hover').css('color', newval);
      $('body input.submit-btn:hover').css('color', newval);
      $('body button.submit-btn:hover').css('color', newval);
      $('body a.submit-btn:hover').css('color', newval);
      $('body span.submit-btn:hover').css('color', newval);
      $('body input.submit:hover').css('color', newval);
      $('body button.submit:hover').css('color', newval);
      $('body a.submit:hover').css('color', newval);
      $('body button[type="submit"]:hover').css('color', newval);
      $('body input.wpp_feps_submit_form:hover').css('color', newval);
      $('body button.wpp_feps_submit_form:hover').css('color', newval);
      $('body a.wpp_feps_submit_form:hover').css('color', newval);
      $('body input.search_b:hover').css('color', newval);
      $('body button.search_b:hover').css('color', newval);
      $('body a.search_b:hover').css('color', newval);
      $('body input.show_more.btn:hover').css('color', newval);
      $('body button.show_more.btn:hover').css('color', newval);
      $('body a.show_more.btn:hover').css('color', newval);
      $('body p.view-all a.btn:hover').css('color', newval);
      $('body p.more a.btn:hover').css('color', newval);
    });
  });

  wp.customize('avalon_secondary_button_color', function(value) {
    value.bind(function(newval) {
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li a').css('background-color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li a').css('background-color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li.current-page a').css('background-color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li.current-page a').css('background-color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .first-page-btn a').css('background-color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .first-page-btn a').css('background-color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .previous-page-btn a').css('background-color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .previous-page-btn a').css('background-color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .next-page-btn a').css('background-color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .next-page-btn a').css('background-color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .last-page-btn a').css('background-color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .last-page-btn a').css('background-color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button').css('background-color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button').css('background-color', newval);
      $('.wpp_property_overview_shortcode .properties_pagination .wpp_property_results_options .wpp_sorter_options .wpp_sortable_link,').css('background-color', newval);
      $('.wpp_property_overview_shortcode .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button').css('background-color', newval);
    });
  });
  wp.customize('avalon_secondary_button_text_color', function(value) {
    value.bind(function(newval) {
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li a').css('color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li a').css('color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li.current-page a').css('color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .pages ul li.current-page a').css('color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .first-page-btn a').css('color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .first-page-btn a').css('color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .previous-page-btn a').css('color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .previous-page-btn a').css('color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .next-page-btn a').css('color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .next-page-btn a').css('color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .last-page-btn a').css('color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_buttons_wrapper .property-overview-navigation .last-page-btn a').css('color', newval);
      $('.widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button').css('color', newval);
      $('.wpp_widget.widget_wpp_property_overview .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button').css('color', newval);
      $('.wpp_property_overview_shortcode .properties_pagination .wpp_property_results_options .wpp_sorter_options .wpp_sortable_link,').css('color', newval);
      $('.wpp_property_overview_shortcode .properties_pagination .wpp_pagination_slider_wrapper .wpp_pagination_button').css('color', newval);
    });
  });

  wp.customize('avalon_permalink_color', function(value) {
    value.bind(function(newval) {
      $('body main.main-content .container .content a').not('.btn').css('color', newval);
    });
  });
  wp.customize('avalon_permalink_hover_color', function(value) {
    value.bind(function(newval) {
      $('body main.main-content .container .content a:hover').not('.btn').css('color', newval);
      $('body main.main-content .container .content a:focus').not('.btn').css('color', newval);
    });
  });


})(jQuery);


