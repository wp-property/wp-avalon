<?php
/**
 * Front page top pext area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('frontpage_text_widget_area_settings', '');
if ($enable_section != 1) :
    ?>
    <div class="frontpage-top-text-area">
        <div class="ftta__title"><?php _e('WP-Property. FREE plugin for property management.', 'wp-avalon'); ?></div>
        <div class="ftta__content">
            <div class="ftta__left">
                
                <?php dynamic_sidebar('sidebar-avalon-features'); ?>
                
                <p>WP-Property is the leading WordPress plugin for creating and managing highly customizable real estate, property management, and completely custom listing showcase websites.</p>
                <p>Although WP-Property can handle so much more than real estate. Showcase any kind of entity you want, from livestock, golf carts, to properties and products, experiencing unparalleled ease of use and flexibility on the way.</p>
            </div>
            <div class="ftta__right"></div>
        </div>
    </div>
    <?php
 endif;
