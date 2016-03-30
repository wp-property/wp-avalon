<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title>
            <?php
            if (is_home() || is_front_page()) {
                echo get_bloginfo('name') . ' - ' . get_bloginfo('description');
            } else {
                wp_title('|', true, 'right') . bloginfo('name');
            }
            ?>
        </title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php get_template_part('template-parts/header/header-bar', 'avalon'); ?>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="logotype col-md-3">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-icon.png" />
                            <span>Unreal Estate</span>
                        </a>
                    </div>
                    <div class="site-header-menu col-md-7">
                        <?php get_template_part('template-parts/navigation/navigation-default', 'avalon'); ?>
                    </div>
                    <div class="nav-additional col-md-2">
                        <a href="#open-header-bar" data-wrap="login-bar" class="additional-button ab__profile" data-toggle="tooltip" data-placement="bottom" title="Go to My Profile"></a>
                        <a href="#open-header-bar" data-wrap="contacts-bar" class="additional-button ab__openbar"></a>
                    </div>
                </div>
            </div>
        </header>
    <main class="main-content" role="main">
        <?php
        get_template_part('template-parts/header/header-carousel', 'avalon');
        