<?php

class avalon_widget_overview extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'avalon-property-overview-widget', __('WP Avalon - Property overview widget', 'wp-avalon')
    );
  }

  function widget($args, $instance) {
    extract($args);
    echo $before_widget;
    ?>

    <div class="property_div property col-md-3">
      <div class="property_div_box">
        <?php if (!empty($instance['image_uri']) && ($instance['image_uri'] != 'Upload Image')) : ?>
          <div class="wpp_overview_left_column">
            <div class="property_image">
              <a rel="<?php echo $instance['title']; ?>" class="property_overview_thumb fancybox_image thumbnail" title="<?php echo $instance['title']; ?>" href="<?php echo esc_url($instance['image_uri']); ?>">
                <img width="300" height="300" style="width:300px;height:300px;" alt="<?php echo $instance['title']; ?>" src="<?php echo esc_url($instance['image_uri']); ?>">
              </a>
            </div>
          </div>
          <?php
        elseif (!empty($instance['custom_media_id'])) :
          $custom_media_id = wp_get_attachment_image_src($instance["custom_media_id"]);
          if (!empty($custom_media_id) && !empty($custom_media_id[0])) :
            ?>
            <div class="wpp_overview_left_column">
              <div class="property_image">
                <a rel="<?php echo $instance['title']; ?>" class="property_overview_thumb fancybox_image thumbnail" title="<?php echo $instance['title']; ?>" href="<?php echo esc_url($custom_media_id[0]); ?>">
                  <img width="300" height="300" style="width:300px;height:300px;" alt="<?php echo $instance['title']; ?>" src="<?php echo esc_url($custom_media_id[0]); ?>">
                </a>
              </div>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        <div class="wpp_overview_right_column">
          <ul class="wpp_overview_data">
            <li class="property_title">
              <a href="<?php echo $instance['link']; ?>"><?php echo $instance['title']; ?></a>
            </li>
            <li class="property_address">
              <?php echo $instance['location']; ?>
            </li>
          </ul>
          <div class="property_bottom">
            <div class="pb__left">
              <ul>
                <?php if (!empty($instance['beds'])) : ?><li><label>Beds: </label><?php echo $instance['beds']; ?></li><?php endif; ?>
                <?php if (!empty($instance['baths'])) : ?><li><label>Baths: </label><?php echo $instance['baths']; ?></li><?php endif; ?>
              </ul>
            </div>
            <div class="pb__right">
              <div class="property_price"><?php echo $instance['price']; ?></div>
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
    $instance['custom_media_id'] = strip_tags($new_instance['custom_media_id']);

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
      <label for="<?php echo $this->get_field_id('beds'); ?>"><?php _e('Bads', 'wp-avalon'); ?></label><br/>
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

      <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name('image_uri'); ?>" value="<?php _e('Upload Image', 'wp-avalon'); ?>" style="margin-top:5px;"/>
    </p>

    <input class="custom_media_id" id="<?php echo $this->get_field_id('custom_media_id'); ?>" name="<?php echo $this->get_field_name('custom_media_id'); ?>" type="hidden" value="<?php
           if (!empty($instance["custom_media_id"])): echo $instance["custom_media_id"];
           endif;
           ?>" />

    <?php
  }

}

/**
 * Register widget
 */
add_action('widgets_init', function() {
  register_widget('avalon_widget_overview');
});

