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
        <?php get_template_part('template-parts/header/header', 'bar'); ?>
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="logotype col-md-3">
                        <?php get_template_part('template-parts/header/header', 'logo'); ?>
                    </div>
                    <div class="navigation-box col-md-9">
                        <span class="nav-button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <div class="navigation-wrapper row">
                            <div class="site-header-menu col-md-9">
                                <?php get_template_part('template-parts/navigation/navigation-default', 'avalon'); ?>
                            </div>
                            <div class="nav-additional col-md-3">
                                <?php get_template_part('template-parts/navigation/navigation-additional', 'avalon'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <main class="main-content" role="main">
        <?php
        get_template_part('template-parts/header/header', 'secondary');
        