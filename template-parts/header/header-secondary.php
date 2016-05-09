<?php
/**
 * The template for displaying carousel in header
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$header_image = get_theme_mod('header_image', get_template_directory_uri() . '/images/default-header-image.jpg');
$wellcome_disable = get_theme_mod('header_wellcome_disable', '');
$wellcome_property_search = get_theme_mod('header_wellcome_property_search_disable', '');
?>
<div class="secondary-header <?php if (is_home() || is_front_page()) echo 'sh__frontpage'; ?>">
    <?php
    if (is_home() || is_front_page()) :
        if (!empty($header_image)) :
            ?>
            <div class="secondary-header-image" style="background-image: url('<?php echo $header_image; ?>'); background-size: cover; background-position: center center;"></div>
            <?php
        endif;
        echo '<div class="container">';
        echo '<div class="wellcome-text-box">';
        echo '<h1>' . get_theme_mod('header_wellcome_title', __('Wellcome to WP Avalon', 'wp-avalon')) . '</h1>';
        echo '<p>' . get_theme_mod('header_wellcome_text', __('WP Avalon - FREE wordpress theme. Created special for using with <a href="#">wp-property</a> plugin', 'wp-avalon')) . '</p>';
        if (function_exists('ud_check_wp_property')) :
            if ($wellcome_property_search != 1) :
                echo '<div class="wellcome-box-property-search">';
                echo do_shortcode('[property_search]');
                echo '</div>';
            endif;
        else :
            echo '<h3>At that place you can enable default property search</h3>';
        endif;
        echo '</div>';
        echo '</div>';
    else :
        $exist_images_in_head = get_theme_mod('header_image_show_featured_image_in_head', '1');
        if ($exist_images_in_head == '1') :
            $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            if (!empty($featured_image)) :
                echo '<div class="secondary-header-image" style="background-image: url(\'' . $featured_image . '\'); background-size: cover; background-position: center center;"></div>';
            elseif (!empty($header_image)) :
                echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
            endif;
        elseif (!empty($header_image)) :
            echo '<div class="secondary-header-image" style="background-image: url(\'' . $header_image . '\'); background-size: cover; background-position: center center;"></div>';
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
    ?>
</div>