/*
 * Scripts for plugin
 */
function result_html(result, object) {
  for (var i in result) {
    if (typeof result[i].images !== 'undefined' && typeof result[i].images.thumbnail !== 'undefined' && result[i].images.thumbnail !== '') {
      var image = result[i].images.thumbnail;
    } else if (typeof result[i].featured_image_url !== 'undefined' && result[i].featured_image_url !== '') {
      var image = result[i].featured_image_url;
    } else {
      var image = result[i].default_property_image;
    }
    if (typeof result[i].short_location !== 'undefined' && result[i].short_location !== false) {
      var location = result[i].short_location;
    } else {
      var location = '';
    }
    if (typeof result[i].currency !== 'undefined' && result[i].currency !== '') {
      var currency_symbol = result[i].currency;
    } else {
      var currency_symbol = '';
    }
    var html = '<li class="fcp__property clearfix">' +
      '<div class="fcpp__image">' +
      '<img src="' + image + '" alt="' + result[i].featured_image_title + '" /></div>' +
      '<div class="fcpp__wrap">' +
      '<a href="' + result[i].permalink + '" class="fcpp__title" title="' + result[i].post_title + '">' + result[i].short_title + '</a>' +
      '<div class="fcpp__location">' + location + '</div>' +
      '<div class="fcpp__price">' + currency_symbol + result[i].price + '</div>' +
      '</div><button class="fcp_del_property" data-id="' + result[i].ID + '"><i class="fa fa-times"></i></button></li>';

    jQuery('.widget_' + object + ' .property-list').append(html);
  }
}
function no_result(text, object, action) {
  if (action == 'remove') {
    jQuery('.widget_' + object + ' .property-list li.no-result').remove();
  } else {
    var html = '<li class="no-result">' + text + '</li>';
    jQuery('.widget_' + object + ' .property-list').html(html);
  }
}
function exist_compare_properties() {
  if (localStorage.getItem("compare_json") !== '' || localStorage.getItem("compare_json") !== null) {
    var result = JSON.parse(localStorage.getItem("compare_json"));
    result_html(result, 'compare_properties');
  }
}
function exist_favorites_properties() {
  if (localStorage.getItem("favorites_json") !== '' || localStorage.getItem("favorites_json") !== null) {
    var result = JSON.parse(localStorage.getItem("favorites_json"));
    result_html(result, 'favorites_properties');
  }
}

function exist_properties() {
  var compareResult = JSON.parse(localStorage.getItem("compare_json"));
  var favoriteResult = JSON.parse(localStorage.getItem("favorites_json"));
  if (compareResult && 0 == compareResult.length || compareResult == null ) {
    no_result('No items to compare', 'compare_properties', 'add');
  } else {
    no_result('', 'compare_properties', 'remove');
  }
  if (favoriteResult && 0 == favoriteResult.length || favoriteResult == null) {
    no_result('No items in favorites', 'favorites_properties', 'add');
  } else {
    no_result('', 'favorites_properties', 'remove');
  }
}

function add_compare_button() {
  var json = JSON.parse(localStorage.getItem("compare_json"));
  if (json && json.length >= 2) {
    jQuery('.wc__compare_box .compare-button').addClass('active');
  } else {
    jQuery('.wc__compare_box .compare-button').removeClass('active');
  }
}

function fcp_callback_message(message) {
  jQuery('body').addClass('nowrap');
  jQuery('.fcp__message-box').show();
  jQuery('.fcp__message-box-wraper .fcp__text').html(message);
  jQuery('.fcp__message-box-wraper').css({
    top: '45%',
    left: (jQuery(window).width() - jQuery('.fcp__message-box-wraper').outerWidth()) / 2 + 'px'
  });
}
function active_button() {
  var compareJson = JSON.parse(localStorage.getItem("compare_json"));
  var favoritesJson = JSON.parse(localStorage.getItem("favorites_json"));
  jQuery('body button.fcp-button.fcpb-favorites').each(function () {
    var buttonID = jQuery(this).attr('data-id');
    for (var i in favoritesJson) {
      if (favoritesJson[i].ID == buttonID) {
        jQuery('button.fcp-button.fcpb-favorites[data-id="' + buttonID + '"]').addClass('active');
      }
    }
  });
  jQuery('body button.fcp-button.fcpb-compare').each(function () {
    var buttonID = jQuery(this).attr('data-id');
    for (var i in compareJson) {
      if (compareJson[i].ID == buttonID) {
        jQuery('button.fcp-button.fcpb-compare[data-id="' + buttonID + '"]').addClass('active');
      }
    }
  });
}

jQuery(document).ready(function () {

//    Spinner START
  var opts = {
    lines: 10, // The number of lines to draw
    length: 10, // The length of each line
    width: 7, // The line thickness
    radius: 15, // The radius of the inner circle
    corners: 1, // Corner roundness (0..1)
    rotate: 0, // The rotation offset
    direction: 1, // 1: clockwise, -1: counterclockwise
    color: '#FFF', // #rgb or #rrggbb or array of colors
    speed: 1, // Rounds per second
    trail: 60, // Afterglow percentage
    shadow: false, // Whether to render a shadow
    hwaccel: false, // Whether to use hardware acceleration
    className: 'fcp_spinner', // The CSS class to assign to the spinner
    zIndex: 2e9, // The z-index (defaults to 2000000000)
    top: '50%', // Top position relative to parent
    left: '50%' // Left position relative to parent
  };
  var target = document.getElementById('fcp_spinner');
  var spinner = new Spinner(opts).spin(target);
//    Spinner END


  exist_favorites_properties();
  exist_compare_properties();
  exist_properties();
  add_compare_button();
  active_button();

  jQuery(document).on('click', '.fcp-button', function () {
    if (typeof window.localStorage != 'undefined') {

      var click_action = jQuery(this).attr('data-click');
      var click_id = jQuery(this).attr('data-id');
      if (click_action === 'add-to-favorites') {
        var json = JSON.parse(localStorage.getItem("favorites_json"));
        if (json && json.length > 0) {
          var not_isset = true;
          for (var i in json) {
            if (json[i].ID == click_id) {
              fcp_callback_message('You already add this item to Favorites!');
              not_isset = false;
            }
          }
          if (not_isset) {
            add_to_favorite_widget(click_id);
          }
        } else {
          add_to_favorite_widget(click_id);
        }
      } else if (click_action === 'compare_properties') {
        var json = JSON.parse(localStorage.getItem("compare_json"));
        if (json && json.length > 0) {
          not_isset = true;
          if (json && json.length >= 2) {
            fcp_callback_message('You can not add more than two items!');
            not_isset = false;
          } else {
            for (var i in json) {
              if (json[i].ID == click_id) {
                fcp_callback_message('You already add this item to Compare!');
                not_isset = false;
              }
            }
            if (not_isset) {
              add_to_compare_widget(click_id);
            }
          }
        } else {
          add_to_compare_widget(click_id);
        }
      }
    }
  });

  jQuery(document).on('click', '.wc__compare_box .fcp_del_property', function () {
    var this_id = jQuery(this).attr('data-id');
    jQuery(this).parents('.fcp__property').remove();
    var json = JSON.parse(localStorage.getItem("compare_json"));
    for (var i in json) {
      if (json[i].ID == this_id) {
        json.splice(i, 1);
        localStorage["compare_json"] = JSON.stringify(json);
      }
    }
    add_compare_button();
    jQuery('.fcp-button.fcpb-compare').removeClass('active');
    exist_properties();
  });
  jQuery(document).on('click', '.wc__favorites_box .fcp_del_property', function () {
    var this_id = jQuery(this).attr('data-id');
    jQuery(this).parents('.fcp__property').remove();
    var json = JSON.parse(localStorage.getItem("favorites_json"));
    for (var i in json) {
      if (json[i].ID == this_id) {
        json.splice(i, 1);
        localStorage["favorites_json"] = JSON.stringify(json);
      }
    }
    add_compare_button();
    jQuery('.fcp-button.fcpb-favorites').removeClass('active');
    exist_properties();
  });


  jQuery(document).on('click', '.widget_compare_properties .compare-button.active', function (event) {

    var compare_titles = JSON.parse(jQuery('#hidden_titles').val());

    function modal_titles() {
      var title = '';
      for (j in compare_titles) {
        title += '<div class="property-box-' + compare_titles[j] + '">' + compare_titles[j] + '</div>';
      }
      return title;
    }

    function modal_row() {
      var json = JSON.parse(localStorage.getItem("compare_json"));
      var rows = '';
      for (var i in json) {
        if (typeof json[i].images !== 'undefined') {
          if (typeof json[i].images.medium !== 'undefined' && json[i].images.medium !== '') {
            var image = json[i].images.medium;
            var img = '<img src="' + image + '" alt="' + json[i].post_title + '" />';
          } else if (typeof json[i].featured_image_url !== 'undefined' && json[i].featured_image_url !== '') {
            var image = json[i].featured_image_url;
            var img = '<img src="' + image + '" alt="' + json[i].post_title + '" />';
          } else {
            var image = json[i].default_property_image;
            var img = '<img src="' + image + '" alt="' + json[i].post_title + '" />';
          }
        }
        rows += '<div class="fcpmb-property-box">' +
          '<div class="fcpmb-property-box-wrapper">' +
          '<div class="property-box-image">' + img + '</div>' +
          '<div class="property-box-title"><div><a href="' + json[i].permalink + '">' + json[i].post_title + '</a></div></div>';
        for (var k in compare_titles) {
          rows += '<div class="property-box-row"><div>';
          if (typeof json[i][k] != 'undefined') {
            if (json[i][k] == true) {
              rows += '<div class="true-checkbox-image"></div>';
            } else if (json[i][k] == '') {
              rows += '-';
            } else if (k == 'price' && json[i]['price'] !== '' && typeof (json[i]['currency'] !== 'undefined')) {
              rows += json[i]['currency'] + json[i]['price'];
            } else {
              var end = '';
              if(json[i][k].length > 40) {
                end = ' ...';
              }
              var row_text = json[i][k].substr(0, 40);
              rows += row_text + end;
            }
          }
          rows += '</div></div>';
        }
        rows += '</div></div>';
      }
      return rows;
    }
    jQuery('body').addClass('nowrap');
    jQuery('.fcp-modal-box').show();
    jQuery('.fcp-modal-box .fcpmb__title_column_wrapper .fcpmb__compare_list').html(modal_titles());
    jQuery('.fcp-modal-box .fcpmb__content_column').html(modal_row());
    jQuery('.fcp-modal-box .fcpmb__wrapper_overflow').height(jQuery(window).outerHeight() - 100);
    event.stopPropagation();
  });
  jQuery(document).on('click', '.fcpmb__wrapper_overflow', function (event) {
    jQuery('body').removeClass('nowrap');
    event.stopPropagation();
  });
  jQuery(document).on('click', '.fcp-modal-box, .close-fcp-compare', function (event) {
    jQuery('.fcp-modal-box').hide();
    jQuery('body').removeClass('nowrap');
    event.preventDefault();
  });

  jQuery(document).on('click', '.fcp__close-message-box, .fcp__message-box', function (event) {
    jQuery('.fcp__message-box-wraper').css('top', '0');
    jQuery('.fcp__message-box').hide();
    jQuery('body').removeClass('nowrap');
    event.preventDefault();
  });
  jQuery(document).on('click', '.fcp__message-box-wraper, .fcpmb__wrapper_overflow', function(event){
    jQuery('body').removeClass('nowrap');
    event.stopPropagation();
  });

});

jQuery(window).load(function () {
  var titleHeight = jQuery('.property-single-page-wrapper .entry-header h1').outerHeight();
  jQuery('.property-single-page-wrapper .property-fcp-buttons').css('top', titleHeight + 'px');
});

jQuery(window).scroll(function () {
  if ((jQuery('article').is('.property-single-page-wrapper'))) {
    var pageScroll = jQuery(window).scrollTop();
    var destination = jQuery('.property-single-page-wrapper section').first().offset().top;
    if (pageScroll >= destination) {
      jQuery('.property-fcp-buttons').addClass('fixed');
    } else {
      jQuery('.property-fcp-buttons').removeClass('fixed');
    }
  }
});

function add_to_favorite_widget(ID) {
  var id = ID;
  jQuery.ajax({
    type: "POST",
    url: avalon_ajax.ajaxurl,
    beforeSend: function () {
      jQuery('.fcp_loader_wrap').addClass('active');
      jQuery('body').addClass('nowrap');
    },
    data: {
      action: 'avalon_fcp_get_property',
      data: id
    },
    async: true,
    success: function (result) {
      if (typeof window.localStorage != 'undefined') {

        var stored = JSON.parse(localStorage.getItem("favorites_json"));
        if (stored && stored.length > 0) {
          stored.push(result);
        } else {
          stored = [result];
        }
        localStorage.setItem("favorites_json", JSON.stringify(stored));

        if (typeof result.images !== 'undefined' && typeof result.images.thumbnail !== 'undefined' && result.images.thumbnail !== '') {
          var image = result.images.thumbnail;
        } else if (typeof result.featured_image_url !== 'undefined' && result.featured_image_url !== '') {
          var image = result.featured_image_url;
        } else {
          var image = result.default_property_image;
        }

        if (typeof result.short_location !== 'undefined' && result.short_location !== false) {
          var location = result.short_location;
        } else {
          var location = '';
        }

        if (typeof result.currency !== 'undefined' && result.currency !== '') {
          var currency_symbol = result.currency;
        } else {
          var currency_symbol = '';
        }

        if (typeof result.price !== 'undefined' && result.price !== false) {
          var current_price = currency_symbol + result.price;
        } else {
          var current_price = '';
        }

        var html = '<li class="fcp__property clearfix">' +
          '<div class="fcpp__image">' +
          '<img src="' + image + '" alt="' + result.featured_image_title + '" /></div>' +
          '<div class="fcpp__wrap">' +
          '<a href="' + result.permalink + '" class="fcpp__title" title="' + result.post_title + '">' + result.short_title + '</a>' +
          '<div class="fcpp__location">' + location + '</div>' +
          '<div class="fcpp__price">' + current_price + '</div>' +
          '</div><button class="fcp_del_property" data-id="' + result.ID + '"><i class="fa fa-times"></i></button></li>';
        jQuery('.widget_favorites_properties .property-list').append(html);
      }
      if (jQuery('body').not(jQuery('.widget_favorites_properties'))) {

      } else {
        jQuery("html, body").animate({scrollTop: jQuery('.widget_favorites_properties').offset().top}, 400);
      }
      jQuery('.fcp_loader_wrap').removeClass('active');
      jQuery('body').removeClass('nowrap');
      active_button();
      exist_properties();
    },
    error: function (e) {
      fcp_callback_message('Erorr!');
      jQuery('.fcp_loader_wrap').removeClass('active');
      jQuery('body').removeClass('nowrap');
    }
  });

}
function add_to_compare_widget(ID) {
  var id = ID;
  jQuery.ajax({
    type: "POST",
    url: avalon_ajax.ajaxurl,
    beforeSend: function () {
      jQuery('.fcp_loader_wrap').addClass('active');
      jQuery('body').addClass('nowrap');
    },
    data: {
      action: 'avalon_fcp_get_property',
      data: id
    },
    async: true,
    success: function (result) {
      if (typeof window.localStorage != 'undefined') {

        var stored = JSON.parse(localStorage.getItem("compare_json"));
        if (stored && stored.length > 0) {
          stored.push(result);
        } else {
          stored = [result];
        }
        localStorage.setItem("compare_json", JSON.stringify(stored));

        if (typeof result.images !== 'undefined' && typeof result.images.thumbnail !== 'undefined' && result.images.thumbnail !== '') {
          var image = result.images.thumbnail;
        } else if (typeof result.featured_image_url !== 'undefined' && result.featured_image_url !== '') {
          var image = result.featured_image_url;
        } else {
          var image = result.default_property_image;
        }

        if (typeof result.short_location !== 'undefined' && result.short_location !== false) {
          var location = result.short_location;
        } else {
          var location = '';
        }

        if (typeof result.currency !== 'undefined' && result.currency !== '') {
          var currency_symbol = result.currency;
        } else {
          var currency_symbol = '';
        }

        if (typeof result.price !== 'undefined' && result.price !== false) {
          var current_price = currency_symbol + result.price;
        } else {
          var current_price = '';
        }

        var html = '<li class="fcp__property clearfix">' +
          '<div class="fcpp__image">' +
          '<img src="' + image + '" alt="' + result.featured_image_title + '" /></div>' +
          '<div class="fcpp__wrap">' +
          '<a href="' + result.permalink + '" class="fcpp__title" title="' + result.post_title + '">' + result.short_title + '</a>' +
          '<div class="fcpp__location">' + location + '</div>' +
          '<div class="fcpp__price">' + current_price + '</div>' +
          '</div><button class="fcp_del_property"><i class="fa fa-times"></i></button></li>';
        jQuery('.widget_compare_properties .property-list').append(html);
        add_compare_button();
      }
      if (jQuery('body').not(jQuery('.widget_compare_properties'))) {

      } else {
        jQuery("html, body").animate({scrollTop: jQuery('.widget_compare_properties').offset().top}, 400);
      }
      jQuery('.fcp_loader_wrap').removeClass('active');
      jQuery('body').removeClass('nowrap');
      active_button();
      exist_properties();
    },
    error: function (e) {
      fcp_callback_message('Erorr!');
      jQuery('.fcp_loader_wrap').removeClass('active');
      jQuery('body').removeClass('nowrap');
    }
  });
}