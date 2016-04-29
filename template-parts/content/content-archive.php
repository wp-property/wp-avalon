<?php
/**
 * Template part for index.php and archive.php
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$date_format = get_option('date_format');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="archive-post-box">
        <div class="post-featured-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
            </a>
        </div>
        <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="post-date"><?php the_time($date_format); ?></div>
        <div class="post-content">
            <?php
            if (!empty(get_the_content())) {
                the_content('Read more...');
            } elseif (!empty(category_description())) {
                echo category_description();
            }
            ?>
        </div>
        <?php the_tags('<div class="post-tags"><label>Tags: </label>', ', ', '</div>'); ?>
    </div>
</article>