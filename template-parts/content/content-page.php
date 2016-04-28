<?php
/**
 * Template part for page.php
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-container-box">
        <div class="post-content"><?php the_content(); ?></div>
    </div>
</article>