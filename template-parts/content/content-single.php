<?php
/**
 * Template part for single.php
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$date_format = get_option('date_format');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-container-box">
        <div class="post-featured-image"><?php the_post_thumbnail(get_the_ID(), 'full'); ?></div>
        <div class="post-date"><?php the_time($date_format); ?></div>
        <div class="post-content"><?php the_content(); ?></div>
        <?php the_tags('<div class="post-tags"><label>Tags: </label>', ', ', '</div>'); ?>
    </div>
    <?php comments_template(); ?>
</article>