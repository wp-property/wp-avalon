<?php
/**
 * Template part for page.php container
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-template="template-parts/content/content-page">
  <?php
  the_content();
  wp_link_pages(array(
      'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'wp-avalon') . '</span>',
      'after' => '</div>',
      'link_before' => '<span>',
      'link_after' => '</span>',
      'pagelink' => '<span class="screen-reader-text">' . __('Page', 'wp-avalon') . ' </span>%',
      'separator' => '<span class="screen-reader-text">, </span>',
  ));
  ?>
  <?php comments_template(); ?>
</article>