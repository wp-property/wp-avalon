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

    <?php get_template_part('template-parts/front-property-search', 'avalon'); ?>

</div>

<?php get_footer(); ?>