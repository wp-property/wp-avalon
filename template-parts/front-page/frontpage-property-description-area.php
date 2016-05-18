<?php
/**
 * Front page top pext area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('property_description_disable', '');
if ($enable_section != 1) :
  ?>
  <div class="frontpage-property-description-area" data-template="template-parts/front-page/frontpage-property-description-area">

    <?php
    if (is_active_sidebar('sidebar-property-description')) :
      dynamic_sidebar('sidebar-property-description');
    else :
      the_widget(
              'avalon_widget_features', array(
          'title' => __('About WP Property. Free WordPress plugin', 'wp-avalon'),
          'text' => __('More than a Plugin – A Real Estate Management System!Dynamic Property Listings – No Coding Required!Unparalleled Flexibility – List ANY Product or Service!<br /><br /><strong>Other WP-Property Features</strong>', 'wp-avalon'),
          'featured-left-fields' => array(
              '0' => __('Any amount of custom attributes (fields) and property types.', 'wp-avalon'),
              '1' => __('Free and Paid Add-ons and Themes available.', 'wp-avalon'),
              '2' => __('Property types follow a hierarchical format, having the ability of inheriting settings - i.e. buildings (or communities) will automatically calculate the price range of all floor-plans below them.', 'wp-avalon'),
              '3' => __('Available for translation.', 'wp-avalon'),
              '4' => __('SEO friendly URLs generated for every property, following the WordPress format.', 'wp-avalon'),
              '5' => __('Integrates with Media Library, avoiding the need for additional third-party Gallery plugins.', 'wp-avalon'),
          ),
          'featured-right-fields' => array(
              '0' => __('Different attributes fields inputs are available: Text Editor, Dropdown Selection, Single Checkbox, Multi-checkbox, Radio, Number, Currency, Oembed, File and Image Upload, URL, Date and Color Pickers, etc.', 'wp-avalon'),
              '1' => __('Customizable widgets: Property Overview, Featured Properties, Property Search, Property Gallery, Child Properties, Property Terms, Property Meta', 'wp-avalon'),
              '2' => __('Pagination and sorting works on search results.', 'wp-avalon'),
              '3' => __('Customizable templates for different property types.', 'wp-avalon'),
              '4' => __('Google Maps API to automatically validate physical addresses behind-the-scenes.', 'wp-avalon'),
          ),
              ), array(
          'before_widget' => '',
          'after_widget' => ''
              )
      );
    endif;
    ?>

  </div>
  <?php






 endif;
