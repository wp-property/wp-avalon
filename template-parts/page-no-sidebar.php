<?php
/*
 * Template name: Page without sidebar
 * 
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
get_header();
?>

<div class="container">

    <div class="content col-md-12">
        <?php
        if (have_posts()) :

            while (have_posts()) : the_post();

                get_template_part('template-parts/content/content', 'page');

            endwhile;

        endif;
        ?>
    </div>


</div>

<?php get_footer();
