<?php
/**
 * The template for displaying carousel in header
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$header_image = get_theme_mod('header_image', get_template_directory_uri() . '/images/default-header-image.jpg');
$header_image_disable = get_theme_mod('header_image_disable', '1');
$wellcome_disable = get_theme_mod('header_wellcome_disable', '');
$wellcome_property_search = get_theme_mod('header_wellcome_property_search_disable', '');
if ($header_image_disable == 1) :

    echo '<div class="secondary-header ';

    if (is_front_page()) :
        echo 'sh__frontpage';
    elseif (is_archive()):
        echo '';
    else :
        echo '';
    endif;
    
    echo '" data-template="template-parts/header/header-secondary">';
    
    if (is_front_page()) :
        if (!empty($header_image)) :
            echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
            echo '<div class="shi__blackout"></div>';
        endif;
        if ($wellcome_disable != 1) :
            $wtb__content = get_theme_mod('header_wellcome_text', __('WP Avalon - FREE wordpress theme. Created special for using with <a href="#">wp-property</a> plugin', 'wp-avalon'));
            echo '<div class="container">';
            echo '<div class="wellcome-text-box">';
            echo '<h1>' . get_theme_mod('header_wellcome_title', __('Wellcome to WP Avalon', 'wp-avalon')) . '</h1>';
            echo '<div class="wtb__container"><p>' . do_shortcode($wtb__content) . '</p></div>';
            if (function_exists('ud_check_wp_property')) :
                if ($wellcome_property_search != 1) :
                    echo '<div class="wellcome-box-property-search">';
                    echo do_shortcode('[property_search]');
                    echo '</div>';
                endif;
            else :
                $header_wellcome_property_search_title = get_theme_mod('header_wellcome_property_search_title', __('At that place you can enable default property search', 'wp-avalon'));
                echo '<h3>' . do_shortcode($header_wellcome_property_search_title) . '</h3>';
            endif;
            echo '</div>';
            echo '</div>';
        endif;
    else :
        $exist_images_in_head = get_theme_mod('header_image_show_featured_image_in_head', '1');
        if ($exist_images_in_head == '1') :
            $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            if (!empty($featured_image)) :
                echo '<div class="secondary-header-image" style="background-image: url(\'' . $featured_image . '\'); background-size: cover; background-position: center center;"></div>';
                echo '<div class="shi__blackout"></div>';
            elseif (!empty($header_image)) :
                echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
                echo '<div class="shi__blackout"></div>';
            endif;
        elseif (!empty($header_image)) :
            echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
            echo '<div class="shi__blackout"></div>';
        endif;
        echo '<div class="container">';
        if (is_page() || is_single()) :
            echo '<h1 class="page-title">' . get_the_title() . '</h1>';
        elseif (is_category()) :
            echo '<h1 class="page-title">' . single_tag_title() . '</h1>';
        elseif (is_archive()) :
            the_archive_title('<h1 class="page-title">', '</h1>');
        endif;
        echo '</div>';
    endif;

    echo '</div>';
    
 endif;