<?php
/**
 * Template file for displaying sidebar single pages
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
if (is_active_sidebar('sidebar-left')) :
  ?>

  <aside class="sidebar sidebar_left col-md-4">

    <ul class="sidebar_widget_list">

      <?php dynamic_sidebar('sidebar-left'); ?>

    </ul>

  </aside>

<?php elseif (is_active_sidebar('sidebar-right')) : ?>

  <aside class="sidebar sidebar_right col-md-4">

    <ul class="sidebar_widget_list">

      <?php dynamic_sidebar('sidebar-right'); ?>

    </ul>

  </aside>

<?php endif; ?>