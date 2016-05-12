<?php
/**
 * Front page top pext area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('frontpage_features_area_settings', '');
if ($enable_section != 1) :
    ?>
    <div class="frontpage-avalon-features-area">

        <?php
        if (is_active_sidebar('sidebar-avalon-features')) :
            dynamic_sidebar('sidebar-avalon-features');
        else :
            the_widget(
                    'sidebar_avalon_features', array(
                'title' => __('WP Avalon. Free WordPress theme', 'wp-avalon'),
                'text' => __('Free WordPress theme special for properties', 'wp-avalon'),
                'featured-left-fields-1' => __('It is Free!!!!', 'wp-avalon'),
                'featured-left-fields-2' => __('Grid overview template', 'wp-avalon'),
                'featured-left-fields-3' => __('Let\'s you upload a custom logo', 'wp-avalon'),
                'featured-left-fields-4' => __('Add your contact and company information', 'wp-avalon'),
                'featured-left-fields-5' => __('Available for localization', 'wp-avalon'),
                'featured-right-fields-1' => __('Compatible with WP-Property pluigin and all it\'s add-ons', 'wp-avalon'),
                'featured-right-fields-2' => __('Useful Sidebars and widgets available', 'wp-avalon'),
                'featured-right-fields-3' => __('Adjust the theme to fit your brand\'s colors', 'wp-avalon'),
                'featured-right-fields-4' => __('Fully Responsive', 'wp-avalon'),
                'featured-right-fields-5' => __('Basic free support included', 'wp-avalon'),
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
