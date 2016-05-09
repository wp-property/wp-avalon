<?php
/**
 * Front page addons widget area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('property_addons_disable', '');
if ($enable_section != 1) :
    ?>
    <div class="frontpage-overview-widget-area">
        <div class="row">
            <div class="col-md-12">
                <div class="fowa__title">
                    <?php echo get_theme_mod('property_addons_title', __('Property overview', 'wp-avalon')); ?>
                </div>
            </div>
        </div>
        <div class="row fowa__container">
            <?php dynamic_sidebar('sidebar-avalon-addons'); ?>
        </div>
    </div>
    <?php
endif;
?>