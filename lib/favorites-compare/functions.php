<?php
/**
 * Favorites and Compare properties Functions
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */

add_action('wp_enqueue_scripts', 'register_fcp_styles');

function register_fcp_styles()
{
  wp_enqueue_style('favorites-compare-properties', get_stylesheet_directory_uri() . '/static/styles/favorites-compare.css');

  wp_enqueue_script('spin.min', get_stylesheet_directory_uri() . '/static/scripts/favorites-compare/spin.min.js', array('jquery'));
  wp_enqueue_script('favorites-compare-properties', get_stylesheet_directory_uri() . '/static/scripts/favorites-compare/favorites-compare-properties.js', array('jquery'));
}

/**
 * Including F&C widgets
 */
require_once get_stylesheet_directory() . '/lib/widgets/favorites-compare-widgets.php';

add_action('wp_footer', 'avalon_fcp_modal');

function avalon_fcp_modal()
{
  ?>
  <div class="fcp-modal-box" style="display: none;">
    <div class="fcpmb__wrapper_overflow">
      <div class="fcpmb__wrapper">
        <button class="close-fcp-compare"><i class="fa fa-close"></i></button>
        <div class="fcpmb__title_column">
          <div class="fcpmb__title_column_wrapper">
            <div class="property-box-title"><?php _e('Property title', 'wp-avalon'); ?></div>
            <div class="fcpmb__compare_list">

            </div>
          </div>
        </div>
        <div class="fcpmb__content_column">

        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <?php
}

add_action('wp_footer', 'avalon_fcp__preloader');

function avalon_fcp__preloader()
{
  ?>
  <div class="fcp_loader_wrap">
    <div id="fcp_spinner" class="fcp_loader"></div>
  </div>
  <?php
}

add_action('wp_footer', 'avalon_fcp__message_box');

function avalon_fcp__message_box()
{
  ?>
  <div class="fcp__message-box" style="display: none;">
    <div class="fcp__message-box-wraper">
      <div class="fcp__text"></div>
      <button class="fcp__close-message-box">OK</button>
    </div>
  </div>
  <?php
}

/*
 * Default property image
 */
function avalon_default_property_image_url()
{
  return get_template_directory_uri() . '/static/images/no-avalible-property-image.png';
}

function avalon_fcp_get_property()
{
  global $wp_properties;
  $id = $_POST['data'];
  $property = get_property($id);
  $property['permalink'] = get_permalink($property['ID']);
  $property['short_title'] = substr($property['post_title'], 0, 20);
  $property['short_location'] = substr($property['display_address'], 0, 20);
  $property['default_property_image'] = avalon_default_property_image_url();
  $property['currency'] = $wp_properties['configuration']['currency_symbol'];
  wp_send_json($property);
}

add_action('wp_ajax_nopriv_avalon_fcp_get_property', 'avalon_fcp_get_property');
add_action('wp_ajax_avalon_fcp_get_property', 'avalon_fcp_get_property');