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
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700,300,500&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css' />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="header">

        </header>
