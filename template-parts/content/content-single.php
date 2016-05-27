<?php
/**
 * Template part for single.php container
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$date_format = get_option('date_format');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-template="template-parts/content/content-single">
  <div class="post-container-box">
    <div class="post-featured-image"><?php the_post_thumbnail(get_the_ID(), 'full'); ?></div>
    <div class="post-date"><?php the_time($date_format); ?></div>
    <div class="post-content">
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
    </div>
    <?php the_tags('<div class="post-tags"><label>Tags: </label>', ', ', '</div>'); ?>
  </div>
  <?php comments_template(); ?>
</article>