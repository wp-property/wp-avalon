<?php
/**
 * Pagination template file
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
wp_link_pages(array(
    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'wp-avalon') . '</span>',
    'after' => '</div>',
    'link_before' => '<span>',
    'link_after' => '</span>',
    'pagelink' => '<span class="screen-reader-text">' . __('Page', 'wp-avalon') . ' </span>%',
    'separator' => '<span class="screen-reader-text">, </span>',
));

