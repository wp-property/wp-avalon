<?php
/**
 * Front page headlights widget area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('focus_section_disable_setting', '');
if ($enable_section != 1) :
  ?>
  <div class="frontpage-focus-widget-area" data-template="template-parts/front-page/frontpage-focus-widget-area">
    <div class="row">
      <div class="col-md-12">
        <div class="ffwa__title">
          <?php echo get_theme_mod('focus_section_title_setting', __('Focus widget area title', 'wp-avalon')); ?>
        </div>
      </div>
    </div>
    <div class="row ffwa__container">
      <?php
      if (is_active_sidebar('focus-section')) :
        dynamic_sidebar('focus-section');
      else :
        the_widget('avalon_widget_focus', 'title=WP-Property: Walk Score&text=Adds Walk Score\'s and Neighborhood Map\'s Widgets and Shortcodes to your Site powered by WP-Property plugin. And allows to sort and search your listings by Walk Score.&link=https://www.usabilitydynamics.com/product/wp-property-walkscore &price=$35.00&more_label=More details&image_uri=' . get_template_directory_uri() . "/static/images/fhb__image-1.png", array('before_widget' => '', 'after_widget' => ''));
        the_widget('avalon_widget_focus', 'title=WP-Property: Slideshow&text=Allows you to insert a slideshow into any property page, home page, or virtually anywhere in your blog.&link=https://www.usabilitydynamics.com/product/wp-property-slideshow &price=$50.00&more_label=More details&image_uri=' . get_template_directory_uri() . "/static/images/fhb__image-2.png", array('before_widget' => '', 'after_widget' => ''));
        the_widget('avalon_widget_focus', 'title=WP-Property: Super Map&text=Lets you put a large interactive map virtually anywhere in your WordPress setup. The map lets your visitors quickly view the location of all your properties, and filter them down by attributes.&link=https://www.usabilitydynamics.com/product/wp-property-supermap &price=$50.00&more_label=More details&image_uri=' . get_template_directory_uri() . "/static/images/fhb__image-3.png", array('before_widget' => '', 'after_widget' => ''));
        the_widget('avalon_widget_focus', 'title=WP-Property: Importer&text=The XMLI Importer enables you to automatically import property listings directly into your website. This includes MLS, RETS, XML, CSV formats. Properties are created, merged, removed, or updated according to rules you specify.&link=https://www.usabilitydynamics.com/product/wp-property-importer &price=$175.00&more_label=More details&image_uri=' . get_template_directory_uri() . "/static/images/fhb__image-4.png", array('before_widget' => '', 'after_widget' => ''));
      endif;
      ?>
    </div>
  </div>
  <?php
endif;
?>