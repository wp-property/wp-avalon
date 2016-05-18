<?php
/**
 * Template file for displaying sidebar on single property pages
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
if (isset($post->property_type) && (is_active_sidebar("wpp_sidebar_" . $post->property_type))) :
  ?>

  <aside class="sidebar col-md-4">
    <ul class="sidebar_widget_list">
  <?php dynamic_sidebar("wpp_sidebar_" . $post->property_type); ?>
    </ul>
  </aside>

<?php endif; ?>