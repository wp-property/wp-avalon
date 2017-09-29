<?php
/**
 * Front page headlights widget area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('focus_section_disable_setting', '');
$section_title = get_theme_mod('focus_section_title_setting', __('Focus widget area title', 'wp-avalon'));
if ($enable_section != 1) :
  ?>
  <div class="frontpage-focus-widget-area" data-template="template-parts/front-page/frontpage-focus-widget-area">
    <div class="row">
      <div class="col-md-12">
        <div class="ffwa__title" style="display: <?php echo $section_title ? 'block' : 'none'; ?>">
          <?php echo $section_title; ?>
        </div>
      </div>
    </div>
    <div class="row ffwa__container">
      <?php
      if (is_active_sidebar('focus-section')) :
        dynamic_sidebar('focus-section');
      else :
        the_widget('avalon_widget_focus', array(
            'title' => __('WP-Property: Walk Score', 'wp-avalon'),
            'text' => __('Adds Walk Score\'s and Neighborhood Map\'s Widgets and Shortcodes to your Site powered by WP-Property plugin. And allows to sort and search your listings by Walk Score.', 'wp-avalon'),
            'link' => 'https://www.usabilitydynamics.com/product/wp-property-walkscore',
            'price' => '$35.00',
            'more_label' => __('More details', 'wp-avalon'),
            'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-1.png'
                ), array(
            'before_widget' => '',
            'after_widget' => ''
        ));
        the_widget('avalon_widget_focus', array(
            'title' => __('WP-Property: Slideshow', 'wp-avalon'),
            'text' => __('Allows you to insert a slideshow into any property page, home page, or virtually anywhere in your blog.', 'wp-avalon'),
            'link' => 'https://www.usabilitydynamics.com/product/wp-property-slideshow',
            'price' => '$50.00',
            'more_label' => __('More details', 'wp-avalon'),
            'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-2.png'
                ), array(
            'before_widget' => '',
            'after_widget' => ''
        ));
        the_widget('avalon_widget_focus', array(
            'title' => __('WP-Property: Super Map', 'wp-avalon'),
            'text' => __('Lets you put a large interactive map virtually anywhere in your WordPress setup. The map lets your visitors quickly view the location of all your properties, and filter them down by attributes.', 'wp-avalon'),
            'link' => 'https://www.usabilitydynamics.com/product/wp-property-supermap',
            'price' => '$50.00',
            'more_label' => __('More details', 'wp-avalon'),
            'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-3.png'
                ), array(
            'before_widget' => '',
            'after_widget' => ''
        ));
        the_widget('avalon_widget_focus', array(
            'title' => __('WP-Property: Importer', 'wp-avalon'),
            'text' => __('The XMLI Importer enables you to automatically import property listings directly into your website. This includes MLS, RETS, XML, CSV formats. Properties are created, merged, removed, or updated according to rules you specify.', 'wp-avalon'),
            'link' => 'https://www.usabilitydynamics.com/product/wp-property-importer',
            'price' => '$175.00',
            'more_label' => __('More details', 'wp-avalon'),
            'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-4.png'
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