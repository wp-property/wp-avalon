<?php
/**
 * Template part for front page container
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<article class="frontpage-widgets">

    <?php get_template_part('template-parts/front-page/frontpage-featured-area', 'wp-avalon'); ?>

    <?php get_template_part('template-parts/front-page/frontpage-headlights-widget-area', 'wp-avalon'); ?>

    <?php get_template_part('template-parts/front-page/frontpage-property-description-area', 'wp-avalon'); ?>

    <?php get_template_part('template-parts/front-page/frontpage-overview-widget-area', 'wp-avalon'); ?>

    <?php get_template_part('template-parts/front-page/frontpage-addons-widget-area', 'wp-avalon'); ?>

</article>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

    <div class="page-title"><?php the_title('<h1>', '</h1>'); ?></div>
    <?php
    the_post();
    the_content();
    ?>

</article>
