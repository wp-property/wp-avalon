<?php

class avalon_flip_widget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'avalon-flip-widget', __('WP Avalon - Flip text widget', 'wp-avalon')
    );
  }

  function widget($args, $instance)
  {
    extract($args);
    ?>
    <div class="property_addon_box_wrap">
      <div class="property_addon_box">
        <div class="pab__wrap">
          <div class="front">
            <?php if (!empty($instance['image_uri']) && ($instance['image_uri'] != 'Upload Image')) : ?>
              <div class="pab__image">
                <span style="background-image: url('<?php echo esc_url($instance['image_uri']); ?>')"></span>
              </div>
              <?php
            endif;
            echo (!empty($instance['title'])) ? '<div class="pab__title">' . $instance['title'] . '</div>' : '';
            ?>
          </div>
          <div class="back">
            <div class="pab__excerpt">
              <?php
              if (!empty($instance['description'])) :
                echo $instance['description'];
                if (!empty($instance['url'])) :
                  echo ' <a href="' . $instance['url'] . '" class="readmore"> ' . __('View more...', 'wp-avalon') . '</a>';
                endif;
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }

  function update($new_instance, $old_instance)
  {

    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['description'] = strip_tags($new_instance['description']);
    $instance['url'] = strip_tags($new_instance['url']);
    $instance['image_uri'] = strip_tags($new_instance['image_uri']);

    return $instance;
  }

  function form($instance)
  {
    ?>

    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'wp-avalon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('title'); ?>"
             id="<?php echo $this->get_field_id('title'); ?>" value="<?php
      if (!empty($instance['title'])): echo $instance['title'];
      endif;
      ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('description'); ?>"><?php _e('Text', 'wp-avalon'); ?></label><br/>
      <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('description'); ?>"
                id="<?php echo $this->get_field_id('description'); ?>"><?php
        if (!empty($instance['description'])): echo htmlspecialchars_decode($instance['description']);
        endif;
        ?></textarea>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('url'); ?>"><?php _e('Url', 'wp-avalon'); ?></label><br/>
      <input type="text" name="<?php echo $this->get_field_name('url'); ?>"
             id="<?php echo $this->get_field_id('url'); ?>" value="<?php
      if (!empty($instance['url'])): echo $instance['url'];
      endif;
      ?>" class="widefat"/>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('image_uri'); ?>"><?php _e('Image', 'wp-avalon'); ?></label><br/>
      <?php
      if (!empty($instance['image_uri'])) :
        echo '<img class="custom_media_image" src="' . $instance['image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" alt="' . __('Uploaded image', 'wp-avalon') . '" /><br />';
      endif;
      ?>

      <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>"
             id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php
      if (!empty($instance['image_uri'])): echo $instance['image_uri'];
      endif;
      ?>" style="margin-top:5px;">

      <input type="button" class="button button-primary custom_media_button" id="custom_media_button"
             value="<?php _e('Upload Image', 'wp-avalon'); ?>" style="margin-top:5px;"/>
      <input type="button" class="button button-primary remove_media_button" id="remove_media_button"
             value="<?php _e('Disable image', 'wp-avalon'); ?>" style="margin-top:5px;"/>
    </p>
    <?php
  }

}

/**
 * Register widget
 */
add_action('widgets_init', function () {
  register_widget('avalon_flip_widget');
});

