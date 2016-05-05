<?php
/**
 * Front page headlights widget area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('headlights_wa_disable_setting', '');
if ($enable_section != 1) :
    ?>
    <div class="frontpage-headlights-widget-area">
        <div class="row">
            <div class="col-md-12">
                <div class="fhwa__title">
                    <?php echo get_theme_mod('headlights_wa_title_setting', __('Headlight widget area title', 'wp-avalon')); ?>
                </div>
            </div>
        </div>
        <div class="row fhwa__container">
            <?php dynamic_sidebar('sidebar-headlights'); ?>
        </div>
    </div>
    <?php
endif;
?>