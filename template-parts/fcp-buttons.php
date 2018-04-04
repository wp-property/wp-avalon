<?php
/**
 * Tempalte for showing Favorites and Compare properties buttons
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>

  <div class="property-fcp-buttons">

    <?php if (true === get_theme_mod('avalon_favorites_visibility', true)) { ?>
      <button class="fcp-button fcpb-favorites" data-click="add-to-favorites" data-id="<?php the_ID(); ?>"><i
          class="fa fa-heart" aria-hidden="true"></i></button>
    <?php } ?>

    <?php if (true === get_theme_mod('avalon_compare_visibility', true)) { ?>
      <button class="fcp-button fcpb-compare" data-click="compare_properties" data-id="<?php the_ID(); ?>"><i
          class="fa fa-exchange" aria-hidden="true"></i></button>
    <?php } ?>

  </div>

<?php
