<?php
/*
 * Template part for navigation in header
 * 
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
if (has_nav_menu('primary')) :
    ?>
    <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'primary-menu',
        ));
        ?>
    </nav><!-- .main-navigation -->
<?php endif; ?>