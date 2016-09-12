<?php

/**
 * The template for displaying header image
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$header_image = get_theme_mod('header_image', get_template_directory_uri() . '/static/images/default-header-image.jpg');
$frontpage_header_image_section_enable = get_theme_mod('header_image_disable', '1');
$posts_header_image_section_enable = get_theme_mod('header_image_post_disable', '1');
$welcome_section_disable = get_theme_mod('header_welcome_disable', '');
$welcome_property_search = get_theme_mod('header_welcome_property_search_disable', '');
$header_image_frontpage_height = get_theme_mod('header_image_frontpage_height', '600');
$header_image_single_height = get_theme_mod('header_image_single_height', '300');

if (is_front_page()) :
  if ($frontpage_header_image_section_enable == 1) :
    echo '<div class="secondary-header sh__frontpage" data-template="template-parts/header/header-secondary"';
    echo ' style="height: ' . $header_image_frontpage_height . 'px">';
    if (!empty($header_image)) :
      echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
      echo '<div class="shi__blackout"></div>';
    endif; // if not empty header image

    if ($welcome_section_disable != 1) :
      $wtb__content = get_theme_mod('header_welcome_text', __('WP Avalon - FREE wordpress theme. Created special for using with <a href="#">wp-property</a> plugin', 'wp-avalon'));

      echo '<div class="container">';
      echo '<div class="welcome-text-box">';
      echo '<h1>' . get_theme_mod('header_welcome_title', __('Welcome to WP Avalon', 'wp-avalon')) . '</h1>';
      echo '<div class="wtb__container"><p>' . do_shortcode($wtb__content) . '</p></div>';
      if (function_exists('ud_check_wp_property')) :
        if ($welcome_property_search != 1) :
          echo '<div class="welcome-box-property-search">';
          echo do_shortcode('[property_search]');
          echo '</div>';
        endif;
      else :
        $header_welcome_property_search_title = get_theme_mod('header_welcome_property_search_title', __('At that place you can enable default property search', 'wp-avalon'));
        echo '<h3>' . do_shortcode($header_welcome_property_search_title) . '</h3>';
      endif; // property search box or text box instead of serch box section
      echo '</div>'; // .welcome text box
      echo '</div>'; // .container
    endif; // if welcome section enable
    echo '</div>'; // .header secondary box
  endif; // if header image section enable
else : // if is front page
  if ($posts_header_image_section_enable == 1) :
    echo '<div class="secondary-header sh__page" data-template="template-parts/header/header-secondary"';
    echo ' style="height: ' . $header_image_single_height . 'px">';
    $featuret_image_intead_header_image = get_theme_mod('header_image_show_featured_image_in_head', '1');
    if ($featuret_image_intead_header_image == 1) :
      if (is_page() || is_single()) :
        $attach_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
        if (!empty($attach_url)) :
          echo '<div class="secondary-header-image" style="background-image: url(\'' . wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) . '\'); background-size: cover; background-position: center center;"></div>';
          echo '<div class="shi__blackout"></div>';
        elseif (!empty($header_image)) :
          echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
          echo '<div class="shi__blackout"></div>';
        endif;
      elseif (is_home() && (!empty($header_image))) : // if is page or single
        echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
        echo '<div class="shi__blackout"></div>';
      else : // if is home and not empty header image
        if (!empty($header_image)) :
          echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
          echo '<div class="shi__blackout"></div>';
        endif; // if not empty header image
      endif; // if is single, post, blog, ets.
    else : // if featured image show instead of header image
      if (!empty($header_image)) :
        echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
        echo '<div class="shi__blackout"></div>';
      endif; // if not empty header image
    endif; // if show header image

    echo '<div class="container">';
    if (is_page() || is_single()) :
      echo '<h1 class="page-title">' . get_the_title() . '</h1>';
    elseif (is_category() || is_archive() || is_home()) :
      echo '<h1 class="page-title">';
      single_post_title();
      echo '</h1>';
      if (is_paged()) :
        global $wp_query;
        $total = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
        $current = get_query_var('paged') ? intval(get_query_var('paged')) : 1;
        echo '<h3 class="page-tagline">';
        printf(__('Page %s of %s', 'wp-avalon'), $current, $total);
        echo '</h3>';
      endif;
    elseif (is_search()) :
      echo '<h1 class="page-title">';
      printf(__('Search results for: %s', 'wp-avalon'), '<span>' . esc_html(get_search_query()) . '</span>');
      echo '</h1>';
    endif;
    echo '</div>'; // .container

    echo '</div>'; // .header secondary box
  endif; // if header image section enable
endif; // if not front page
