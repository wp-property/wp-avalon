<?php
/*
 * Template part footer widgets area
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
if (is_active_sidebar('sidebar-footer')) :
    ?>
    <div class="footer-widget-area" data-template="template-parts/footer/footer-widget-area">
        <div class="container">
            <div class="row">
                <?php dynamic_sidebar('sidebar-footer'); ?>
            </div>
        </div>
    </div>
<?php endif;