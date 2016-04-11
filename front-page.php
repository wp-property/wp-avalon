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

    <?php get_template_part('template-parts/front-page/frontpage-widget-aria', 'avalon'); ?>
    
    <?php get_template_part('template-parts/front-page/frontpage-featured-items', 'avalon'); ?>

    <?php get_template_part('template-parts/content/content', 'front-page'); ?>
    
</div>

<?php get_footer(); ?>