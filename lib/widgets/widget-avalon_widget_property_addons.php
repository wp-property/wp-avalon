<?php

class avalon_widget_property_addons extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'avalon-property-addons-widget', __('WP Avalon - Property add-ons', 'wp-avalon')
    );
  }

  function widget($args, $instance) {
    extract($args);
    echo $before_widget;
    if (!empty($instance['custom_media_id'])) :
      $custom_media_id = wp_get_attachment_image_src($instance["custom_media_id"]);
    endif;
    ?>
    <div class="col-md-4">
      <div class="property_addon_box">
        <div class="pab__wrap">
          <div class="front">
            <div class="pab__image">
              <a href="<?php echo $instance['url']; ?>">
                <?php if (!empty($instance['image_uri']) && ($instance['image_uri'] != 'Upload Image')) : ?>
                  <img alt="<?php echo $instance['title']; ?>" src="<?php echo esc_url($instance['image_uri']); ?>" />
                  <?php
                elseif (!empty($instance['custom_media_id'])) :
                  if (!empty($custom_media_id) && !empty($custom_media_id[0])) :
                    ?>
                    <img alt="<?php echo $instance['title']; ?>" src="<?php echo esc_url($custom_media_id[0]); ?>" />
                  <?php endif; ?>
                <?php endif; ?>
              </a>
            </div>
            <div class="pab__title"><a href="<?php echo $instance['url']; ?>"><?php echo $instance['title']; ?></a></div>
          </div>
          <div class="back">
            <div class="pab__excerpt">
              <?php echo $instance['description']; ?>
              <a href="<?php echo $instance['url']; ?>" class="readmore">View more...</a>
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
    $instance['description'] = stripslashes(wp_filter_post_kses($new_instance['description']));
    $instance['url'] = strip_tags($new_instance['url']);
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
      <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text', 'wp-avalon'); ?></label><br/>
      <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text'); ?>" id="<?php echo $this->get_field_id('text'); ?>"><?php
        if (!empty($instance['text'])): echo htmlspecialchars_decode($instance['text']);
        endif;
        ?></textarea>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('url'); ?>"><?php _e('Url', 'wp-avalon'); ?></label><br/>
      <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('url'); ?>" id="<?php echo $this->get_field_id('url'); ?>"><?php
        if (!empty($instance['url'])): echo $instance['url'];
        endif;
        ?></textarea>
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
  register_widget('avalon_widget_property_addons');
});

