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

    <?php get_template_part('template-parts/front-page/frontpage-property-search', 'avalon'); ?>
    
    <?php get_template_part('template-parts/front-page/frontpage-featured-items', 'avalon'); ?>

</div>

<?php get_footer(); ?>