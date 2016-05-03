<?php
/**
 * The default page for property overview page.
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
global $post, $wp_properties;
get_header();
?>

<div class="container">

    <div class="content col-md-8">

        <?php get_template_part('template-parts/content/content', 'property-overview-page'); ?>

    </div>

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
