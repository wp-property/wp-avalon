<?php
/**
 * Defoult template part of content for property overview page
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div id="wpp_default_overview_page">
        <h1 class="entry-title"><?php echo $post->post_title; ?></h1>
        <div class="<?php wpp_css('property_overview_page::entry_content', "entry-content"); ?>">
            <?php if (is_404()): ?>
                <p><?php _e('Sorry, we could not find what you were looking for.  Since you are here, take a look at some of our properties.', ud_get_wp_property()->domain) ?></p>
            <?php endif; ?>
            <?php
            if (isset($wp_properties['configuration']['do_not_override_search_result_page']) && $wp_properties['configuration']['do_not_override_search_result_page'] == 'true')
                echo $content = apply_filters('the_content', $post->post_content);
            ?>
            <div class="<?php wpp_css('property_overview_page::all_properties', "all-properties"); ?>">
                <?php echo do_shortcode('[property_overview]'); ?>
            </div>
        </div><!-- .entry-content -->
    </div><!-- #post-## -->
</article>