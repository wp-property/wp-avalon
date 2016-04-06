<?php
/**
 * Page template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
get_header();
?>

<div class="container">

    <?php get_sidebar(); ?>

    <?php if (is_active_sidebar('sidebar-left') || isset($post->property_type) && is_active_sidebar("wpp_sidebar_" . $post->property_type)) : ?>
        <div class="content col-md-8">
        <?php else : ?>
            <div class="content col-md-12">
            <?php endif; ?>
            <?php
            if (have_posts()) :

                while (have_posts()) : the_post();

                    get_template_part('template-parts/content/content', 'page');

                endwhile;

            endif;
            ?>
        </div>

    </div>

    <?php get_footer(); ?>