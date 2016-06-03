<?php

class avalon_aboutus_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'avalon-aboutus-widget', __('WP Avalon - About us widget', 'wp-avalon')
    );
  }

  function widget($args, $instance) {
    extract($args);

    echo '<div class="aboutus-text-widget">';
    if (!empty($instance['title'])) {
      echo '<div class="atw__title">' . $instance['title'] . '</div>';
    }
    if (!empty($instance['text'])) {
      echo '<div class="atw__content';
      if (($instance['featured-left-fields'][0] == '') && ($instance['featured-right-fields'][0] == '')) {
        echo ' disabled_features ';
      }
      echo '">' . do_shortcode($instance['text']) . '</div>';
    }
    if (($instance['featured-left-fields'][0] != '') && ($instance['featured-right-fields'][0] != '')) {
      echo '<div class="atw__features row">';
      if (!empty($instance['featured-left-fields']) && $instance['featured-left-fields'] != '') :
        echo '<ul class="atw_features_left col-md-6">';
        foreach ($instance['featured-left-fields'] as $value) :
          if ($value != '') {
            echo '<li>' . $value . '</li>';
          }
        endforeach;
        echo '</ul>';
      endif;
      if (!empty($instance['featured-right-fields']) && $instance['featured-right-fields'] != '') :
        echo '<ul class="atw_features_right col-md-6">';
        foreach ($instance['featured-right-fields'] as $value) :
          if ($value != '') {
            echo '<li>' . $value . '</li>';
          }
        endforeach;
        echo '</ul>';
      endif;
      echo '</div>';
    }
    echo '</div>';
  }

  function update($new_instance, $old_instance) {

    $instance = $new_instance;
    $instance['text'] = stripslashes(wp_filter_post_kses($new_instance['text']));
    $instance['title'] = strip_tags($new_instance['title']);

    return $instance;
  }

  function form($instance) {
    $rand = rand(0, 1000000);
    $defaults = array('title' => __('', 'wp-avalon'), 'text' => '');

    if ($this->get_field_id('-add') == 'avalon-aboutus-widget-fetaures-__i__-add') :
      $widget_id = 'avalon-aboutus-widget-fetaures-' . $rand . '-add';
    else :
      $widget_id = $this->get_field_id('-add');
    endif;
    $instance = wp_parse_args((array) $instance, $defaults);
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
    <div class="features-list <?php echo $widget_id; ?>-left-input-containers left-input-containers">
      <label for="features"><?php _e('Features list left column', 'wp-avalon'); ?></label>
      <div class="clearfix">
        <?php
        if (!empty($instance['featured-left-fields'])) :
          foreach ($instance['featured-left-fields'] as $key => $value) :
            ?>
            <p class="features-row">
              <input type="text" class="widefat features-input"
                     value="<?php echo $value; ?>"
                     name="<?php echo $this->get_field_name('featured-left-fields[]'); ?>"
                     id="<?php echo $this->get_field_id('featured-left-fields-' . $key); ?>" />
              <span class="button-secondary remove-feature"></span>
            </p>
            <?php
          endforeach;
        else :
          ?>
          <p class="features-row">
            <input type="text" class="widefat features-input"
                   value=""
                   name="<?php echo $this->get_field_name('featured-left-fields[]'); ?>"
                   id="<?php echo $this->get_field_id('featured-left-fields-0'); ?>" />
            <span class="button-secondary remove-feature"></span>
          </p>
        <?php
        endif;
        ?>
      </div>
      <span class="button-secondary to-left-side add-features-input <?php echo $widget_id; ?>">Add field</span>
    </div>
    <br />
    <div class="features-list <?php echo $widget_id; ?>-right-input-containers right-input-containers">
      <label for="features"><?php _e('Features list right column', 'wp-avalon'); ?></label>
      <div class="clearfix">
        <?php
        if (!empty($instance['featured-right-fields'])) :
          foreach ($instance['featured-right-fields'] as $key => $value) :
            ?>
            <p class="features-row">
              <input type="text" class="widefat features-input"
                     value="<?php echo $value; ?>"
                     name="<?php echo $this->get_field_name('featured-right-fields[]'); ?>"
                     id="<?php echo $this->get_field_id('featured-right-fields-' . $key); ?>" />
              <span class="button-secondary remove-feature"></span>
            </p>
            <?php
          endforeach;
        else :
          ?>
          <p class="features-row">
            <input type="text" class="widefat features-input"
                   value=""
                   name="<?php echo $this->get_field_name('featured-right-fields[]'); ?>"
                   id="<?php echo $this->get_field_id('featured-right-fields-0'); ?>" />
            <span class="button-secondary remove-feature"></span>
          </p>
        <?php
        endif;
        ?>
      </div>
      <span class="button-secondary to-right-side add-features-input <?php echo $widget_id; ?>">Add field</span>
    </div>
    <div style="clear:both;"></div>
    <?php
  }

}

/**
 * Register widget
 */
add_action('widgets_init', function() {
  register_widget('avalon_aboutus_widget');
});

