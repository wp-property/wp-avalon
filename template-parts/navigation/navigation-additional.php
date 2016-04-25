<?php
/*
 * Template part for navigation in header
 * 
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$contact_us_options_value = get_option('contact_us_area_settings_value', '2');
$login_options_value = get_option('show_login_register_button_value', '1');
?>
<div class="na__wrapper">
    <?php
    if ($login_options_value == '1') :
        if (is_user_logged_in()) :
            ?>
            <a href="<?php echo wp_logout_url(site_url()); ?>" data-wrap="login-bar" class="additional-button ab__logout ab__profile" data-toggle="tooltip" data-placement="bottom" title="Logout">Logout</a>
        <?php else : ?>
            <a href="#login-bar" class="additional-button ab__profile" data-toggle="tooltip" data-placement="bottom" title="Login or register">Login or Register</a>
        <?php
        endif;
    endif;
// -----------------
    if ($contact_us_options_value !== '1') {
        ?>
        <a href="#contacts-bar" class="additional-button ab__contactus" data-toggle="tooltip" data-placement="bottom" title="Contact us">Contact Us</a>
<?php } ?>
</div>