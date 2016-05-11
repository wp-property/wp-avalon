<?php
/**
 * Front page top pext area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('property_description_disable', '');
if ($enable_section != 1) :
    ?>
    <div class="frontpage-property-description-area">

        <?php dynamic_sidebar('sidebar-property-description'); ?>

    </div>
    <?php

 endif;
