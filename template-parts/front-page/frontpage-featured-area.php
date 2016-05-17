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
    <div class="frontpage-avalon-features-area" data-template="template-parts/front-page/frontpage-featured-area">

        <?php
        if (is_active_sidebar('sidebar-avalon-features')) :
            dynamic_sidebar('sidebar-avalon-features');
        else :
            the_widget(
                    'sidebar_avalon_features', array(
                'title' => __('WP Avalon. Free WordPress theme', 'wp-avalon'),
                'text' => __('We designed our Avalon WordPress theme especially for WP-Property plugin. It has responsive style layouts so that it can be displayed nicely in any device, desktop or mobile. Customizable sidabars and defferent widgets to suit every taste. All colors from the site are also customizable to to fit your brand\'s colors.', 'wp-avalon'),
                'featured-left-fields' => array(
                    '0' => __('It is Free!!!!', 'wp-avalon'),
                    '1' => __('Grid overview template', 'wp-avalon'),
                    '2' => __('Let\'s you upload a custom logo', 'wp-avalon'),
                    '3' => __('Add your contact and company information', 'wp-avalon'),
                    '4' => __('Available for localization', 'wp-avalon'),
                ),
                'featured-right-fields' => array(
                    '0' => __('Compatible with WP-Property pluigin and all it\'s add-ons', 'wp-avalon'),
                    '1' => __('Useful Sidebars and widgets available', 'wp-avalon'),
                    '2' => __('Adjust the theme to fit your brand\'s colors', 'wp-avalon'),
                    '3' => __('Fully Responsive', 'wp-avalon'),
                    '4' => __('Basic free support included', 'wp-avalon'),
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
