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

        <?php dynamic_sidebar('sidebar-avalon-features'); ?>

    </div>
    <?php

 endif;
