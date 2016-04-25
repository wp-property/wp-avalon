<?php
/**
 * Template part for index.php and archive.php
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title('<h1 class="page-title">', '</h1>'); ?>
    <?php the_content(); ?>
</article>