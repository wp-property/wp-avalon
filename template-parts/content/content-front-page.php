<?php
/**
 * Template part for front page
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="page-title"><?php the_title('<h1>', '</h1>'); ?></div>
    <?php the_post(); the_content(); ?>
</article>