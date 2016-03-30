<?php
/*
 * Template part footer widgets area
 * 
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
if (is_active_sidebar('sidebar-footer')) :
    ?>
    <div class="footer-widget-aria">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('sidebar-footer'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>