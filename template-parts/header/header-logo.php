<?php
/**
 * Template for site logo in header
 */
?>

<a href="<?php echo site_url(); ?>" title="<?php echo get_bloginfo('name'); ?>">
    <?php
    $logo_image = get_theme_mod('avalon_logo_big_image_settings');
    $icon_url = get_theme_mod('avalon_logo_icon_settings');
    $logo_text = get_theme_mod('avalon_logo_text_settings');
    $margin_icon = get_theme_mod('avalon_logo_icon_margin_setting');
    $margin = get_theme_mod('avalon_logo_img_margin_setting');
    if (!empty($logo_image)) :
        echo '<img class="full_image_logo" style="margin-top: ' . $margin . 'px" alt="Logotype" src="' . $logo_image . '">';
    else :
        if (!empty($icon_url)) :
            ?>
            <img class="logo-icon" style="margin-top: <?php echo $margin_icon; ?>px" src="<?php echo $icon_url; ?>" alt="Logo icon" />
        <?php endif; ?>
        <span><?php echo $logo_text; ?></span>
    <?php endif; ?>
</a>