<?php
/**
 * Tempalte for showing Favorites and Compare properties buttons
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */

if (is_user_logged_in()) {
  ?>
  <div class="property-fcp-buttons">
    <button class="fcp-button fcpb-favorites" data-click="add-to-favorites" data-id="<?php the_ID(); ?>"><i
        class="fa fa-heart" aria-hidden="true"></i></button>
    <button class="fcp-button fcpb-compare" data-click="compare_properties" data-id="<?php the_ID(); ?>"><i
        class="fa fa-exchange" aria-hidden="true"></i></button>
  </div>
  <?php
}
