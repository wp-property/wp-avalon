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
        <ul class="tab-list">
            <li class="tab-head active" data-click="front_page_settings">Front page settings</li>
            <li class="tab-head" data-click="head_settings">Head side settings</li>
        </ul>
        <div class="tab-container">
            <div id="front_page_settings" class="tab-content active">
                <form method="POST" action="options.php">
                    <?php
                    settings_fields('avalon_frontpage_settings_page');
                    do_settings_sections('avalon_frontpage_themesupport');
                    submit_button();
                    ?>
                </form>
            </div>
            <div id="head_settings" class="tab-content">
                <form method="POST" action="options.php">
                    <?php
                    settings_fields('avalon_head_setting_section');
                    do_settings_sections('avalon_head_themesupport');
                    submit_button();
                    ?>
                </form>
            </div>
        </div>
    </div>
    <?php ?>
</div>
