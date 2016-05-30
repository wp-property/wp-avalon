<?php
/**
 * Search page template file
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
      <?php endif; ?>
      <?php
      if (get_theme_mod('header_image_post_disable', '1') != 1) :
        echo '<h1 class="page-title">';
        printf(__('Search results for: %s', 'wp-avalon'), '<span>' . esc_html(get_search_query()) . '</span>');
        echo '</h1>';
      endif;

      if (have_posts()) :

        while (have_posts()) : the_post();

          get_template_part('template-parts/content/content', 'archive');

        endwhile;

        the_posts_pagination(array(
            'prev_text' => __('Prev', 'wp-avalon'),
            'next_text' => __('Next', 'wp-avalon'),
            'before_page_number' => '<span class="meta-nav screen-reader-text"></span>',
        ));
      else :

        echo '<h2>' . __('Nothing found', 'wp-avalon') . '</h2>';
        echo '<a href="' . esc_url(home_url('/')) . '">' . __('Go back to home page', 'wp-avalon') . '</a>';

      endif;
      ?>
    </div>

  </div>

  <?php get_footer(); ?>