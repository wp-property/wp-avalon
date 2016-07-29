<?php
/**
 * Index template file
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
get_header();
?>

<div class="container">

  <?php get_sidebar(); ?>

  <?php if (is_active_sidebar('sidebar-left') || is_active_sidebar('sidebar-right')) : ?>
    <div class="content col-md-8">
    <?php else : ?>
      <div class="content col-md-12">
      <?php
      endif;

      if (get_theme_mod('header_image_post_disable', '1') != 1) :
        echo '<h1 class="page-title">';
        single_post_title();
        echo '</h1>';
      endif;

      if (have_posts()) :

        the_posts_pagination(array(
          'prev_text' => __('Prev', 'wp-avalon'),
          'next_text' => __('Next', 'wp-avalon'),
          'before_page_number' => '<span class="meta-nav screen-reader-text"></span>',
        ));
        
        while (have_posts()) : the_post();

          get_template_part('template-parts/content/content', 'archive');

        endwhile;

        the_posts_pagination(array(
            'prev_text' => __('Prev', 'wp-avalon'),
            'next_text' => __('Next', 'wp-avalon'),
            'before_page_number' => '<span class="meta-nav screen-reader-text"></span>',
        ));

      else :

        get_template_part('template-parts/content/content', 'none');

      endif;
      ?>
    </div>

  </div>

<?php get_footer(); ?>