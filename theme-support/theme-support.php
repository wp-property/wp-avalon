<?php
/**
 * Theme support page file
 * 
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
global $wpdb;
?>
<div class="admin-wrap clearfix">
    <h1><?php _e('Theme options'); ?></h1>
    <div class="aw__container">
        <form method="POST" action="options.php">
            <?php
            settings_fields('avalon_setting_section');
            do_settings_sections('avalon_themesupport');
            submit_button();
            ?>
        </form>
    </div>
    <?php ?>
</div>
