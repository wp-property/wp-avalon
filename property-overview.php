<?php
/**
 * WP-Property Overview Template
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
if (have_properties()) {
  $thumbnail_dimentions = WPP_F::get_image_dimensions($wpp_query['thumbnail_size']);
  ?>
  <div class="<?php wpp_css('property_overview::grid_view', "wpp_grid_view wpp_property_view_result"); ?>">
    <div class="<?php wpp_css('property_overview::all_properties', "all-properties"); ?>">
      <?php foreach (returned_properties('load_gallery=false') as $property) { ?>

        <div class="<?php wpp_css('property_overview::property_div', "property_div {$property['post_type']}"); ?>">

          <div class="property_div_box">
            <?php
            if (isset($property['featured'])) :
              $featured = $property['featured'];
            else :
              $featured = 0;
            endif;
            if ($featured == 1) :
              ?>
              <div class="property_featured_label">
                <span><?php _e('Featured', 'wp-avalon'); ?></span>
              </div>
            <?php endif; ?>
            <div class="<?php wpp_css('property_overview::left_column', "wpp_overview_left_column"); ?>">
              <?php avalon_property_overview_image(array('image_type' => $wpp_query['thumbnail_size'])); ?>
              <?php if (!empty($property['property_type_label'])) : ?>
                <div class="property_type_label"><?php echo $property['property_type_label']; ?></div>
              <?php endif; ?>
            </div>

            <div class="<?php wpp_css('property_overview::right_column', "wpp_overview_right_column"); ?>">

              <ul class="<?php wpp_css('property_overview::data', "wpp_overview_data"); ?>">
                <li class="property_title">
                  <a <?php echo $in_new_window; ?> href="<?php echo $property['permalink']; ?>"><?php echo $property['post_title']; ?></a>
                  <?php if (!empty($property['is_child'])): ?>
                    <?php _e('of', 'wp-avalon'); ?> <a <?php echo $in_new_window; ?> href='<?php echo $property['parent_link']; ?>'><?php echo $property['parent_title']; ?></a>
                  <?php endif; ?>
                </li>

                <?php if (!empty($property['custom_attribute_overview']) || !empty($property['tagline'])): ?>
                  <li class="property_tagline">
                    <?php if (isset($property['custom_attribute_overview']) && $property['custom_attribute_overview']): ?>
                      <?php echo $property['custom_attribute_overview']; ?>
                    <?php elseif ($property['tagline']): ?>
                      <?php echo $property['tagline']; ?>
                    <?php endif; ?>
                  </li>
                <?php endif; ?>

                <?php if (!empty($property['phone_number'])): ?>
                  <li class="property_phone_number"><?php echo $property['phone_number']; ?></li>
                <?php endif; ?>

                <?php if (!empty($property['display_address'])): ?>
                  <li class="property_address"><a href="<?php echo $property['permalink']; ?>#property_map"><?php echo $property['display_address']; ?></a></li>
                <?php endif; ?>

                <?php if ($show_children && !empty($property['children'])): ?>
                  <li class="child_properties">
                    <div class="wpd_floorplans_title"><?php echo $child_properties_title; ?></div>
                    <table class="wpp_overview_child_properties_table">
                      <?php foreach ($property['children'] as $child): ?>
                        <tr class="property_child_row">
                          <th class="property_child_title"><a href="<?php echo $child['permalink']; ?>"><?php echo $child['post_title']; ?></a></th>
                          <td class="property_child_price"><?php echo isset($child['price']) ? $child['price'] : ''; ?></td>
                        </tr>
                      <?php endforeach; ?>
                    </table>
                  </li>
                <?php endif; ?>

                <?php if (!empty($wpp_query['detail_button'])) : ?>
                  <li style="text-align: right;"><a <?php echo $in_new_window; ?> class="button" href="<?php echo $property['permalink']; ?>">More button<?php echo $wpp_query['detail_button'] ?></a></li>
                <?php endif; ?>
              </ul>

              <?php if (!empty($property['price'])) : ?>
                <div class="property_bottom">
                  <div class="pb__left">
                    <ul>
                      <?php if (!empty($property['bedrooms'])) : ?>
                        <li><label>Beds: </label><?php echo $property['bedrooms']; ?></li>
                      <?php endif; ?>
                      <?php if (!empty($property['bathrooms'])) : ?>
                        <li><label>Baths: </label><?php echo $property['bathrooms']; ?></li>
                      <?php endif; ?>
                    </ul>
                  </div>
                  <div class="pb__right">
                    <div class="property_price"><?php echo $property['price']; ?></div>
                  </div>
                </div>
              <?php endif; ?>

            </div><?php // .wpp_right_column            ?>
          </div><?php // .property_div_box            ?>

        </div><?php // .property_div            ?>

      <?php } /** end of the propertyloop. */ ?>
    </div><?php // .all-properties          ?>
  </div><?php // .wpp_grid_view           ?>
<?php } else { ?>
  <div class="wpp_nothing_found">
    <p><?php echo sprintf(__('Sorry, no properties found - try expanding your search, or <a href="%s">view all</a>.', 'wp-avalon'), site_url() . '/' . $wp_properties['configuration']['base_slug']); ?></p>
  </div>
<?php } ?>