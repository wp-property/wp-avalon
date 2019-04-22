<?php

/*
 * Register compare widget
 */

class Compare_Properties_Widget extends WP_Widget
{

  function __construct()
  {
    parent::__construct('compare_properties', __('Compare Properties'), array('description' => __('Compare Properties widget')));
  }

  function update($new_instance, $old_instance)
  {
    $property_stats = $new_instance['property_stats'];
    return $new_instance;
  }

  function form($instance)
  {
    global $wp_properties;
    $property_stats = isset($instance['property_stats']) ? $instance['property_stats'] : false;
    $title = isset($instance['title']) ? $instance['title'] : false;
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">
        <?php _e('Widget title'); ?>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
               name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>"/>
      </label>
    </p>
    <?php
    echo '<h3>' . __('Select items to show in compare') . '</h3>';

    $attr = $wp_properties['property_stats'];
    ?>
    <ul>
      <?php foreach ($attr as $key => $val) { ?>
        <li>
          <label for="<?php echo $key; ?>">
            <input type="checkbox"
                   id="<?php echo $key; ?>"
                   value="<?php echo $val; ?>"
                   name="<?php echo $this->get_field_name('property_stats'); ?>[<?php echo $key; ?>]"
              <?php echo((is_array($property_stats) && array_key_exists($key, $property_stats)) ? " checked " : ""); ?>
            />
            <?php echo $val; ?>
          </label>
        </li>
      <?php } ?>
    </ul>
    <?php
  }

  function widget($args, $instance)
  {
    if (true === get_theme_mod('avalon_compare_visibility', true)) { // Show widget if settings == true
      echo $args['before_widget'];
      $property_stats = isset($instance['property_stats']) ? $instance['property_stats'] : '';
      $compare_val = json_encode($property_stats);
      $title = apply_filters('widget_title', $instance['title']);
      if (!empty($title)) {
        ?>
        <h2 class="widget-title"><?php echo $title; ?></h2>
      <?php } ?>
      <div class="wc__box wc__compare_box">
        <div class="wc__box_wrap">
          <input type='hidden' id="hidden_titles" value='<?php echo $compare_val; ?>'/>
          <ul class="compare-list property-list">

          </ul>
          <button class="compare-button"><?php _e('Compare', 'wp-avalon'); ?></button>
        </div>
      </div>
      <?php
      echo $args['after_widget'];
    }
  }
}

/*
 * Register favorite widget
 */

class Favorites_Properties_Widget extends WP_Widget
{

  function __construct()
  {
    parent::__construct('favorites_properties', __('Favorites Properties'), array('description' => __('Favorites Properties widget')));
  }

  function update($new_instance, $old_instance)
  {
    return $new_instance;
  }

  function form($instance)
  {
    global $wp_properties;
    $title = isset($instance['title']) ? $instance['title'] : false;
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">
        <?php _e('Widget title'); ?>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
               name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>"/>
      </label>
    </p>
    <?php

  }

  function widget($args, $instance)
  {
    if (true === get_theme_mod('avalon_favorites_visibility', true)) { // Show widget if settings == true
      echo $args['before_widget'];
      $title = apply_filters('widget_title', $instance['title']);
      if (!empty($title)) {
        ?>
        <h2 class="widget-title"><?php echo $title; ?></h2>
      <?php } ?>
      <div class="wc__box wc__favorites_box">
        <div class="wc__box_wrap">
          <ul class="favorites-list property-list">

          </ul>
        </div>
      </div>
      <?php
      echo $args['after_widget'];
    }
  }
}

function FC_Properties_register_widgets()
{
  if (true === get_theme_mod('avalon_compare_visibility', true)) {
    register_widget('Compare_Properties_Widget');
  }
  if (true === get_theme_mod('avalon_favorites_visibility', true)) {
    register_widget('Favorites_Properties_Widget');
  }
}

add_action('widgets_init', 'FC_Properties_register_widgets');

