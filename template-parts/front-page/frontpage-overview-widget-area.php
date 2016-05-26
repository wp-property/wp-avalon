<?php
/**
 * Front page overview widget area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('property_overview_disable', '');
if ($enable_section != 1) :
  ?>
  <div class="frontpage-overview-widget-area" data-template="template-parts/front-page/frontpage-overview-widget-area">
    <div class="row">
      <div class="col-md-12">
        <div class="fowa__title">
          <?php echo get_theme_mod('property_overview_title', __('WP-Property overview of listings', 'wp-avalon')); ?>
        </div>
      </div>
    </div>
    <div class="row fowa__container">
      <?php
      if (is_active_sidebar('overview-section')) :
        dynamic_sidebar('overview-section');
      else :
        // Widget #1
        the_widget('avalon_widget_overview', array(
            'title' => __('250 S Estes Drive 52', 'wp-avalon'),
            'location' => 'Chapel Hill,  North Carolina',
            'beds' => '1',
            'baths' => '2',
            'price' => '$79,500',
            'link' => '#',
            'image_uri' => get_template_directory_uri() . '/static/images/property_default_image_1.jpeg'
                ), array(
            'before_widget' => '',
            'after_widget' => ''
        ));
        // Widget #2
        the_widget('avalon_widget_overview', array(
            'title' => __('2412 Environ Way 2412', 'wp-avalon'),
            'location' => 'Chapel Hill,  North Carolina',
            'beds' => '3',
            'baths' => '2',
            'price' => '$475.000',
            'link' => '#',
            'image_uri' => get_template_directory_uri() . '/static/images/property_default_image_2.jpeg'
                ), array(
            'before_widget' => '',
            'after_widget' => ''
        ));
        // Widget #3
        the_widget('avalon_widget_overview', array(
            'title' => __('5500 Fortunes Ridge Drive 78b', 'wp-avalon'),
            'location' => 'Durham,  North Carolina',
            'beds' => '1',
            'baths' => '1',
            'price' => '$122.000',
            'link' => '#',
            'image_uri' => get_template_directory_uri() . '/static/images/property_default_image_3.jpeg'
                ), array(
            'before_widget' => '',
            'after_widget' => ''
        ));
        // Widget #4
        the_widget('avalon_widget_overview', array(
            'title' => __('424 E Rose Street', 'wp-avalon'),
            'location' => 'Smithfield,  North Carolina',
            'beds' => '3',
            'baths' => '1',
            'price' => '$99.000',
            'link' => '#',
            'image_uri' => get_template_directory_uri() . '/static/images/property_default_image_4.jpeg'
                ), array(
            'before_widget' => '',
            'after_widget' => ''
        ));
      endif;
      ?>
    </div>
  </div>
  <?php
endif;
?>