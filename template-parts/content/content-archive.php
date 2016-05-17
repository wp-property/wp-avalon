<?php
/**
 * Template part for index.php and archive.php container
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$date_format = get_option('date_format');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-template="template-parts/content/content-archive">
    <div class="archive-post-box">
        <div class="post-featured-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(get_the_ID(), 'full'); ?>
            </a>
        </div>
        <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="post-date"><?php the_time($date_format); ?></div>
        <div class="post-content"><?php the_content('Read more...'); ?></div>
        <?php the_tags('<div class="post-tags"><label>Tags: </label>', ', ', '</div>'); ?>
    </div>
</article>
<?php
the_posts_pagination(array(
    'prev_text' => __('Previous page', 'wp-avalon'),
    'next_text' => __('Next page', 'wp-avalon'),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'wp-avalon') . ' </span>',
));
?>