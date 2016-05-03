<?php
/**
 * Front page template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
get_header();
?>

<div class="container">

    <?php get_template_part('template-parts/front-page/frontpage-widget-area', 'wp-avalon'); ?>

    <?php get_sidebar(); ?>

    <?php if (is_active_sidebar('sidebar-left') || is_active_sidebar('sidebar-right')) : ?>
        <div class="content col-md-8">
        <?php else : ?>
            <div class="content col-md-12">
            <?php endif; ?>
            <?php
            if (have_posts()) :

                while (have_posts()) : the_post();

                    get_template_part('template-parts/content/content', 'front-page');

                endwhile;

            endif;
            ?>

        </div>

    </div>

    <?php
    get_footer();
    