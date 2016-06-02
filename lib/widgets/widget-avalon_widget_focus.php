<?php

class avalon_widget_focus extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'avalon-focus-widget', __('WP Avalon - Focus widget', 'wp-avalon')
    );
  }

  function widget($args, $instance) {
    extract($args);
    echo $before_widget;
    ?>

    <div class="col-lg-3 col-sm-3">
      <div class="ffwa__box">
        <?php if (!empty($instance['image_uri']) && ($instance['image_uri'] != 'Upload Image')) : ?>
          <div class="ffwa__box_icon">
            <?php if (!empty($instance['link'])) { ?>
              <a href="<?php echo $instance['link']; ?>"><i style="background-image:url(<?php echo esc_url($instance['image_uri']); ?>);"></i></a>
            <?php } else { ?>
              <i style="background-image:url(<?php echo esc_url($instance['image_uri']); ?>);"></i>
            <?php } ?>
          </div>
        <?php endif; ?>

        <h3 class="ffwa__box_title">
          <?php
          if (!empty($instance['title'])): echo apply_filters('widget_title', $instance['title']);
          endif;
          ?>
        </h3>
        <?php
        if (!empty($instance['text'])) {
          echo '<p>';
          echo apply_filters('widget_title', $instance['text']);
          echo '</p>';
        }
        ?>
        <?php if (!empty($instance['price']) || !empty($instance['link'])) : ?>
          <div class="ffwa__bottom">
            <?php if (!empty($instance['price'])) : ?>
              <div class="ffwa__price"><?php echo $instance['price']; ?></div>
            <?php endif; ?>
            <div class="ffwa__button">
              <?php if (!empty($instance['link'])) : ?>
                <a href="<?php echo $instance['link']; ?>" class="btn">
                  <?php
                  if (!empty($instance['more_label'])) :
                    echo $instance['more_label'];
                  endif;
                  ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <?php
    echo $after_widget;
  }

  function update($new_instance, $old_instance) {

    $instance = $old_instance;
    $instance['text'] = strip_tags($new_instance['text']);
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['link'] = strip_tags($new_instance['link']);
    $instance['price'] = strip_tags($new_instance['price']);
    $instance['more_label'] = strip_tags($new_instance['more_label']);
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
      <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text', 'wp-avalon'); ?></label><br/>
      <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text'); ?>" id="<?php echo $this->get_field_id('text'); ?>"><?php
        if (!empty($instance['text'])): echo htmlspecialchars_decode($instance['text']);
        endif;
        ?></textarea>
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
      <label for="<?php echo $this->get_field_id('more_label'); ?>"><?php _e('More button label', 'wp-avalon'); ?></label><br />
      <input type="text" name="<?php echo $this->get_field_name('more_label'); ?>" id="<?php echo $this->get_field_id('more_label'); ?>" value="<?php
      if (!empty($instance['more_label'])): echo $instance['more_label'];
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

    <?php
  }

}

/**
 * Register widget
 */
add_action('widgets_init', function() {
  register_widget('avalon_widget_focus');
});
