<?php
/**
 * Front page addons widget area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('addons_disable', '');
if ($enable_section != 1) :
    ?>
    <div class="frontpage-property-addons-area">
        <div class="row">
            <?php dynamic_sidebar('sidebar-property-addons'); ?>
        </div>
    </div>
    <?php
endif;
?>