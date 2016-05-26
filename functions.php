<?php
/**
 * WP Avalon functions 
 * 
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
add_action('wp_enqueue_scripts', 'avalon_init');

function avalon_init() {
  /* JS */
  wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/static/scripts/bootstrap.min.js', array('jquery'), '3.3.6');
  wp_enqueue_script('bootstrap-select.min', get_template_directory_uri() . '/static/scripts/bootstrap-select.min.js', array('jquery'));
  wp_enqueue_script('wp-avalon', get_template_directory_uri() . '/static/scripts/wp-avalon.js', array('jquery', 'bootstrap.min', 'bootstrap-select.min'));
  wp_enqueue_script('jquery.flip.min', get_template_directory_uri() . '/static/scripts/jquery.flip.min.js', array('jquery'));
  wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCUNObksOUAhhcLRd1qGEyL_tnypxhtPPU&libraries=places', array('jquery'));
  wp_localize_script('avalon-ajax', 'avalon_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));

  /* CSS */
  wp_enqueue_style('style', get_template_directory_uri() . '/static/styles/style.css');
  wp_enqueue_style('default-widgets-styles', get_template_directory_uri() . '/static/styles/default-widgets-styles.css');
  wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/static/styles/bootstrap.min.css', '3.3.6');
  wp_enqueue_style('bootstrap-select.min', get_template_directory_uri() . '/static/styles/bootstrap-select.min.css');

  /* Fonts */
  wp_enqueue_style('GoogleUbuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:400,700,300,500&subset=latin,cyrillic-ext');
  wp_enqueue_style('GooglePoppins', 'https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700&');
}

add_action('admin_enqueue_scripts', 'avalon_admin_init');

function avalon_admin_init() {
  wp_enqueue_script('avalon-admin-scripts', get_template_directory_uri() . '/static/admin/scripts/avalon-admin-scripts.js', array('jquery'), '3.3.6');
  wp_enqueue_style('avalon-admin-styles', get_template_directory_uri() . '/static/admin/styles/avalon-admin-styles.css');
  wp_enqueue_media();
}

/**
 * Theme support
 * 
 * @since Avalon 1.0
 */
function avalon_theme_setup() {
  load_theme_textdomain('wp-avalon', get_template_directory() . '/languages');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'avalon_theme_setup');

/**
 * Register menus
 * 
 * @since Avalon 1.0
 */
register_nav_menus(array(
    'primary' => __('Primary Menu', 'wp-avalon'),
));

/**
 * Registers a widget area.
 * 
 * @since Avalon 1.0
 */
function avalon_widgets_init() {
  register_sidebar(array(
      'name' => __('Footer widget area', 'wp-avalon'),
      'id' => 'sidebar-footer',
      'description' => __('Appears at the bottom in content on all pages', 'wp-avalon'),
      'before_widget' => '<div class="col-md-4"><div id="%1$s" class="widget %2$s">',
      'after_widget' => '</div></div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
  ));
  register_sidebar(array(
      'name' => __('Frontpage multi-sidebar', 'wp-avalon'),
      'id' => 'sidebar-frontpage',
      'description' => __('Appears at the top side on frontpage', 'wp-avalon'),
      'before_widget' => '<div class="tab-pane" role="tabpanel" id="%1$s"><div class="multisidebar-widget %2$s">',
      'after_widget' => '</div></div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
  ));
  register_sidebar(array(
      'name' => __('Sidebar Left', 'wp-avalon'),
      'id' => 'sidebar-left',
      'description' => __('Appears at the left side on all pages', 'wp-avalon'),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
  ));
  register_sidebar(array(
      'name' => __('Sidebar Right', 'wp-avalon'),
      'id' => 'sidebar-right',
      'description' => __('Appears at the right side on all pages', 'wp-avalon'),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget' => '</li>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>',
  ));
}

add_action('widgets_init', 'avalon_widgets_init');

/**
 * Registration redirect
 * 
 * @since Avalon 1.0
 */
function avalon_registration_redirect($registration_redirect) {
  return site_url();
}

add_filter('registration_redirect', 'avalon_registration_redirect');

/**
 * Default contact us function
 * 
 * @author vorobjov@UD
 * 
 * @since Avalon 1.0
 */
function empty_sidebar($sidebar) {
  if (is_active_sidebar($sidebar)) {
    return TRUE;
  } else {
    return FALSE;
  }
}

/**
 * Widget functions
 * 
 * @since Avalon 1.0
 */
include_once 'lib/widgets/widgets-functions.php';

/**
 * Theme customizer
 * 
 * @since Avalon 1.0
 */
include_once 'lib/customizer/avalon-customizer.php';

function avalon_customizer_live_preview() {
  wp_enqueue_script('avalon-theme-customizer', get_template_directory_uri() . '/static/scripts/customizer/avalon-customizer.js', array('jquery', 'customize-preview'), '', true);
}

add_action('customize_preview_init', 'avalon_customizer_live_preview');

function avalon_customizer_controls() {
  wp_enqueue_script('avalon-customizer-controls', get_template_directory_uri() . '/static/scripts/customizer/avalon-customizer-controls.js', array('jquery', 'customize-controls'), false, true);
  wp_enqueue_style('avalon-theme-customizer', get_template_directory_uri() . '/static/styles/customizer/avalon-customizer.css');
}

add_action('customize_controls_enqueue_scripts', 'avalon_customizer_controls');

/**
 * Default contact us function
 * 
 * @author vorobjov@UD
 * 
 * @since Avalon 1.0
 */
function default_contact_us() {
  parse_str($_POST['data'], $data);
  $user_name = $data['dcf_user_name'];
  $user_email = $data['dcf_user_email'];
  $user_message = $data['dcf_user_message'];
  $form_options = get_option('contact_us_area_form', '');
  $default_email = $form_options['default_form_email'];
  if (!empty($default_email)) {
    $form_email = $default_email;
  } else {
    $form_email = get_option('admin_email');
  }
  if (isset($data['dcf_user_email'])) {
    $to = $form_email;
    $from = $user_email;
    $name = $user_name;
    $text = $user_message;
    $subject = 'Contact form from ' . get_bloginfo('name');
    $message = $name . " (" . $from . ") \n\n" . $text;

    $headers = "From:" . $from;
    wp_mail($to, $subject, $message, $headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
  }
  die();
}

add_action('wp_ajax_default_contact_us', 'default_contact_us');
add_action('wp_ajax_nopriv_default_contact_us', 'default_contact_us');

/**
 * Add default widgets
 * 
 * @since Avalon 1.0
 */
include_once 'lib/widgets/register-default-widgets.php';

/**
 * Avalon google maps infobox
 * 
 * @since Avalon 1.0
 */
add_filter('wpp_google_maps_infobox', function($data, $post) {

  ob_start();

  global $wp_properties;

  $property = (array) prepare_property_for_display($post, array(
              'load_gallery' => 'false',
              'scope' => 'google_map_infobox'
  ));

  //** Check if we have children */
  if (!empty($property['children']) && (!isset($wp_properties['configuration']['google_maps']['infobox_settings']['do_not_show_child_properties']) || $wp_properties['configuration']['google_maps']['infobox_settings']['do_not_show_child_properties'] != 'true' )) {
    foreach ($property['children'] as $child_property) {
      $child_property = (array) $child_property;
      $html_child_properties[] = '<a href="' . $child_property['permalink'] . '">' . $child_property['post_title'] . '</a>';
    }
  }

  if (!empty($property['featured_image'])) {
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($property['ID']), 'medium');
    if (!empty($image) && is_array($image)) {
      $imageHTML = "<img src=\"{$image[0]}\" alt=\"" . addslashes($post->post_title) . "\" />";
      if (@$wp_properties['configuration']['property_overview']['fancybox_preview'] == 'true' && !empty($property['featured_image_url'])) {
        $imageHTML = "<a href=\"{$property['featured_image_url']}\" class=\"fancybox_image\">{$imageHTML}</a>";
      }
    }
  } else {
    $default_img_url = get_template_directory_uri() . '/static/images/no-avalible-property-image.png';
    $imageHTML = "<img class=\"no-photo\" src=\"{$default_img_url}\" alt=\"\" />";
  }
  ?>
  <div id="infowindow">

    <div class="infowindow_box">
      <?php if (!empty($imageHTML)) { ?>
        <div class="infowindow_left">
          <div class="il__image">
            <?php echo $imageHTML; ?>
          </div>
          <div class="il__title">
            <?php if (!empty($property['price'])) : ?><label><?php echo $property['price']; ?></label><?php endif; ?>
            <?php if (!empty($property['post_title'])) : ?><div class="property-title"><a href="<?php echo get_permalink($property['ID']); ?>"><?php echo $property['post_title']; ?></a></div><?php endif; ?>
            <?php if (!empty($property['display_address']) && !empty($property['latitude']) && !empty($property['longitude'])) : ?><a target="_blank" href="http://maps.google.com/maps?gl=us&daddr=<?php echo $property['latitude'] ?>,<?php echo $property['longitude']; ?>" target="_blank"><?php echo $property['display_address']; ?></a><?php endif; ?>
          </div>
        </div>
      <?php } ?>

      <div class="infowindow_right 
      <?php
      if (empty($imageHTML)) :
        echo ' infowindow_full_width';
      endif;
      ?>
           ">
             <?php if (empty($imageHTML)) : ?>
          <div class="ib__title"><?php echo $property['post_title']; ?></div>
          <div class="ib__location_link"><a target="_blank" href="http://maps.google.com/maps?gl=us&daddr=<?php echo $property['latitude'] ?>,<?php echo $property['longitude']; ?>" target="_blank"><?php echo $property['display_address']; ?></a></div>
          <div class="ib__price"><?php echo $property['price']; ?></div>
        <?php endif; ?>

        <?php
        $content = $property['post_content'];
        if (!empty($content)) :
          echo '<div class="ir__title ir__title_description">' . __('Description', 'wp-avalon') . '</div>';
          echo '<div class="ir__description">' . substr($content, 0, 100) . '...</div>';
        endif;
        ?>

        <?php if (!empty($property['bedrooms']) || !empty($property['bathrooms']) || !empty($property['bathrooms']) || !empty($property['year'])) : ?>
          <div class="ir__title"><?php _e('Overview', 'wp-avalon'); ?></div>
        <?php endif; ?>

        <ul class="ir__list">
          <?php if (!empty($property['bedrooms'])) : ?>
            <li>
              <label><?php _e('Bedrooms', 'wp-avalon'); ?></label>
              <span><?php echo $property['bedrooms']; ?></span>
            </li>
            <?php
          endif;
          if (!empty($property['bathrooms'])) :
            ?>
            <li>
              <label><?php _e('Bathrooms', 'wp-avalon'); ?></label>
              <span><?php echo $property['bathrooms']; ?></span>
            </li>
            <?php
          endif;
          if (!empty($property['year'])) :
            ?>
            <li>
              <label><?php _e('Year of building', 'wp-avalon'); ?></label>
              <span><?php echo $property['year']; ?></span>
            </li>
          <?php endif; ?>
        </ul>
        <?php
        if (!empty($html_child_properties)) {
          echo '<div class="ir__title">' . __('Child Properties', 'wp-avalon') . '</div>';
          echo '<ul class="ir__child_properties_list">';
          foreach ($html_child_properties as $value) {
            echo '<li>' . $value . '</li>';
          }
          echo '</ul>';
        }
        ?>
        <div class="ir__directions">
          <a target="_blank" href="http://maps.google.com/maps?gl=us&daddr=<?php echo $property['latitude'] ?>,<?php echo $property['longitude']; ?>" target="_blank"><?php _e('Get directions', 'wp-avalon'); ?></a>
        </div>
      </div>
    </div>
  </div>
  <?php
  $data = ob_get_clean();
  $data = preg_replace(array('/[\r\n]+/'), array(""), $data);
  $data = addslashes($data);

  return $data;
}, 10, 2);

function avalon_property_overview_image($args = '') {
  global $wpp_query, $property;

  $thumbnail_size = $wpp_query['thumbnail_size'];

  $defaults = array(
      'return' => 'false',
      'image_type' => $thumbnail_size,
  );
  $args = wp_parse_args($args, $defaults);

  /* Make sure that a feature image URL exists prior to committing to fancybox */
  if ($wpp_query['fancybox_preview'] == 'true' && !empty($property['featured_image_url'])) {
    $thumbnail_link = $property['featured_image_url'];
    $link_class = "fancybox_image";
  } else {
    $thumbnail_link = $property['permalink'];
    $link_class = '';
  }

  $image = !empty($property['featured_image']) ? wpp_get_image_link($property['featured_image'], $thumbnail_size, array('return' => 'array')) : false;

  if (!empty($image)) {
    ob_start();
    ?>
    <div class="property_image">
      <a href="<?php echo $thumbnail_link; ?>" title="<?php echo $property['post_title'] . (!empty($property['parent_title']) ? __(' of ', ud_get_wp_property()->domain) . $property['parent_title'] : "" ); ?>" class="property_overview_thumb property_overview_thumb_<?php echo $thumbnail_size; ?> <?php echo $link_class; ?> thumbnail" rel="<?php echo $property['post_name'] ?>">
        <img width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" src="<?php echo $image['link']; ?>" alt="<?php echo $property['post_title']; ?>" style="width:<?php echo $image['width']; ?>px;height:<?php echo $image['height']; ?>px;"/>
      </a>
    </div>
    <?php
    $html = ob_get_contents();
    ob_end_clean();
  } else {
    ob_start();
    ?>
    <div class="property_image">
      <img class="no_property_image" src="<?php echo get_template_directory_uri() . '/static/images/no-avalible-property-image.png'; ?>" alt="no image" />
    </div>
    <?php
    $html = ob_get_contents();
    ob_end_clean();
  }
  if ($args['return'] == 'true') {
    return $html;
  } else {
    echo $html;
  }
}
