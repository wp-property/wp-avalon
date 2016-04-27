<?php
/**
 * The template for displaying carousel in header
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<div class="secondary-header <?php if (is_home() || is_front_page()) echo 'sh__frontpage'; ?>">
    <?php
    if (is_home() || is_front_page()) :
        if (!empty(get_header_image())) :
            ?>
            <div class="secondary-header-image" style="background-image: url('<?php echo get_header_image(); ?>'); background-size: cover; background-position: center center;"></div>
            <?php
        endif;
        ?>
        <div class="container">
            <?php
            $slideshow_options = get_option('show_slideshow', array('value' => '1', 'slideshow_shortcode' => '', 'slideshow_css' => ''));
            $slideshow_shortcode = $slideshow_options['slideshow_shortcode'];
            $slideshow_css = $slideshow_options['slideshow_css'];
            if (isset($slideshow_options) && $slideshow_options['value'] !== '') :
                if ($slideshow_options['value'] == '2' && !empty($slideshow_shortcode)) :
                    echo do_shortcode($slideshow_shortcode);
                    if (!empty($slideshow_css)) :
                        ?>
                        <style type="text/css">
                <?php echo $slideshow_css; ?>
                        </style>
                        <?php
                    endif;
                endif;
            endif;
            ?>
        </div>
        <?php
    else :
        $exist_images_in_head = get_option('show_featured_image_in_head_value', '1');
        $show_head_img_or_featured_img = get_option('show_head_img_or_featured_img_value', '2');
        if ($exist_images_in_head == '1') :
            $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
            if (!empty($featured_image)) :
                echo '<div class="secondary-header-image" style="background-image: url(\'' . $featured_image . '\'); background-size: cover; background-position: center center;"></div>';
            elseif ($show_head_img_or_featured_img == '1' && (!empty(get_header_image()))) :
                echo '<div class="secondary-header-image" style="background-image: url(\'' . get_header_image() . '\'); background-size: cover; background-position: center center;"></div>';
            endif;
        endif;
        echo '<div class="container">';
        if (is_page() || is_single()) :
            echo '<h1 class="page-title">' . get_the_title() . '</h1>';
            the_tagline('<h3 class="page-tagline">', '</h3>');
        elseif (is_category()) :
            echo '<h1 class="page-title">' . single_tag_title() . '</h1>';
        elseif (is_archive()) :
            the_archive_title( '<h1 class="page-title">', '</h1>' );
        endif;
        echo '</div>';
    endif;
    ?>
</div>