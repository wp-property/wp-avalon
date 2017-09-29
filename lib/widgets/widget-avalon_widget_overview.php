<?php

class avalon_widget_overview extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'avalon-property-overview-widget', __('WP Avalon - Overview widget', 'wp-avalon')
    );
  }

  function widget($args, $instance) {
    extract($args);
    echo $before_widget;
    ?>

    <div class="property_div property avalon_property">
      <div class="property_div_box">
        <?php if (!empty($instance['image_uri']) && ($instance['image_uri'] != 'Upload Image')) : ?>
          <div class="wpp_overview_left_column">
            <div class="property_image">
              <a rel="<?php echo $instance['title']; ?>" class="property_overview_thumb fancybox_image thumbnail" title="<?php echo $instance['title']; ?>" href="<?php echo esc_url($instance['image_uri']); ?>">
                <img width="300" height="300" style="width:300px;height:300px;" alt="<?php echo $instance['title']; ?>" src="<?php echo esc_url($instance['image_uri']); ?>">
              </a>
            </div>
          </div>
        <?php endif; ?>
        <div class="wpp_overview_right_column">
          <ul class="wpp_overview_data">
            <li class="property_title">
              <?php if (!empty($instance['link']) && !empty($instance['title'])) : ?>
                <a href="<?php echo $instance['link']; ?>"><?php echo $instance['title']; ?></a>
              <?php elseif (!empty($instance['title'])) : ?>
                <?php echo $instance['title']; ?>
              <?php endif; ?>
            </li>
            <?php if (!empty($instance['location'])) : ?>
              <li class="property_address">
                <?php echo $instance['location']; ?>
              </li>
            <?php endif; ?>
          </ul>
          <div class="property_bottom">
            <div class="pb__left">
              <ul>
                <?php if (!empty($instance['beds'])) : ?><li><label>Beds: </label><?php echo $instance['beds']; ?></li><?php endif; ?>
                <?php if (!empty($instance['baths'])) : ?><li><label>Baths: </label><?php echo $instance['baths']; ?></li><?php endif; ?>
              </ul>
            </div>
            <div class="pb__right">
              <?php if (!empty($instance['price'])) : ?>
                <div class="property_price"><?php echo $instance['price']; ?></div>
              <?php endif; ?>
            </div>
          </div>
        </div>                   
      </div>
    </div>

    <?php
    echo $after_widget;
  }

  function update($new_instance, $old_instance) {

    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['location'] = strip_tags($new_instance['location']);
    $instance['beds'] = strip_tags($new_instance['beds']);
    $instance['baths'] = strip_tags($new_instance['baths']);
    $instance['price'] = strip_tags($new_instance['price']);
    $instance['link'] = strip_tags($new_instance['link']);
    $instance['image_uri'] = strip_tags($new_instance['image_uri']);

    return $instance;
  }

  function form($instance) {
    ?>

    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'wp-avalon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php
      if (!empty($instance['title'])): echo $instance['title'];
      endif;
      ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('location'); ?>"><?php _e('Location', 'wp-avalon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('location'); ?>" id="<?php echo $this->get_field_id('location'); ?>" value="<?php
      if (!empty($instance['location'])): echo $instance['location'];
      endif;
      ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('beds'); ?>"><?php _e('Beds', 'wp-avalon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('beds'); ?>" id="<?php echo $this->get_field_id('beds'); ?>" value="<?php
      if (!empty($instance['beds'])): echo $instance['beds'];
      endif;
      ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('baths'); ?>"><?php _e('Baths', 'wp-avalon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('baths'); ?>" id="<?php echo $this->get_field_id('baths'); ?>" value="<?php
      if (!empty($instance['baths'])): echo $instance['baths'];
      endif;
      ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('price'); ?>"><?php _e('Price', 'wp-avalon'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('price'); ?>" id="<?php echo $this->get_field_id('price'); ?>" value="<?php
      if (!empty($instance['price'])): echo $instance['price'];
      endif;
      ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Link', 'wp-avalon'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('link'); ?>" id="<?php echo $this->get_field_id('link'); ?>" value="<?php
      if (!empty($instance['link'])): echo $instance['link'];
      endif;
      ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('image_uri'); ?>"><?php _e('Image', 'wp-avalon'); ?></label><br/>
      <?php
      if (!empty($instance['image_uri'])) :
        echo '<img class="custom_media_image" src="' . $instance['image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" alt="' . __('Uploaded image', 'wp-avalon') . '" /><br />';
      endif;
      ?>

      <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php
      if (!empty($instance['image_uri'])): echo $instance['image_uri'];
      endif;
      ?>" style="margin-top:5px;">

      <input type="button" class="button button-primary custom_media_button" id="custom_media_button" value="<?php _e('Upload Image', 'wp-avalon'); ?>" style="margin-top:5px;"/>
      <input type="button" class="button button-primary remove_media_button" id="remove_media_button" value="<?php _e('Disable image', 'wp-avalon'); ?>" style="margin-top:5px;"/>
    </p>

    <?php
  }

}

/**
 * Register widget
 */
add_action('widgets_init', function() {
  register_widget('avalon_widget_overview');
});

