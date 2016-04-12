<?php
/*
 * Template part for navigation in header
 * 
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<div class="na__wrapper">
    <?php if (is_user_logged_in()) { ?>
        <a href="<?php echo wp_logout_url( site_url() ); ?>" data-wrap="login-bar" class="additional-button ab__logout ab__profile" data-toggle="tooltip" data-placement="bottom" title="Logout">Logout</a>
    <?php } else { ?>
        <a href="#login-bar" class="additional-button ab__profile" data-toggle="tooltip" data-placement="bottom" title="Login or register">Login or Register</a>
    <?php } ?>
    <a href="#contacts-bar" class="additional-button ab__contactus" data-toggle="tooltip" data-placement="bottom" title="Contact us">Contact Us</a>
</div>