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

  <div class="content col-md-12">
    <?php get_template_part('template-parts/content/content', 'front-page'); ?>

  </div>

</div>

<?php
get_footer();
