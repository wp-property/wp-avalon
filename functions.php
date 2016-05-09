<?php
/**
 * WP Avalon functions 
 * 
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
add_action('wp_enqueue_scripts', 'avalon_init');

function avalon_init() {
    /* JS */
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6');
    wp_enqueue_script('bootstrap-select.min', get_template_directory_uri() . '/js/bootstrap-select.min.js', array('jquery'));
    wp_enqueue_script('wp-avalon', get_template_directory_uri() . '/js/wp-avalon.js', array('jquery', 'bootstrap.min', 'bootstrap-select.min'));
    wp_enqueue_script('google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCUNObksOUAhhcLRd1qGEyL_tnypxhtPPU&libraries=places', array('jquery'));
    wp_localize_script('avalon-ajax', 'avalon_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));

    /* CSS */
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('default-widgets-styles', get_template_directory_uri() . '/css/default-widgets-styles.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', '3.3.6');
    wp_enqueue_style('bootstrap-select.min', get_template_directory_uri() . '/css/bootstrap-select.min.css');

    /* Fonts */
    wp_enqueue_style('GoogleUbuntu', 'https://fonts.googleapis.com/css?family=Ubuntu:400,700,300,500&subset=latin,cyrillic-ext');
}

add_action('admin_enqueue_scripts', 'avalon_admin_init');

function avalon_admin_init() {
    wp_enqueue_script('avalon-admin-scripts', get_template_directory_uri() . '/js/avalon-admin-scripts.js', array('jquery'), '3.3.6');
    wp_enqueue_style('avalon-admin-styles', get_template_directory_uri() . '/css/avalon-admin-styles.css');
    wp_enqueue_media();
}

/**
 * Theme support
 * @since Avalon 1.0
 */
function avalon_theme_setup() {
    load_theme_textdomain('wp-avalon', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
//    $custom_header_default = array(
//        'default-image' => get_template_directory_uri() . '/images/default-header-image.jpg'
//    );
//    add_theme_support('custom-header', $custom_header_default);
}

add_action('after_setup_theme', 'avalon_theme_setup');

/**
 * Register menus
 * @since Avalon 1.0
 */
register_nav_menus(array(
    'primary' => __('Primary Menu', 'wp-avalon'),
));

/**
 * Theme support menu.
 * @since Avalon 1.0
 */
//add_action('admin_menu', 'avalon_theme_support');
//
//function avalon_theme_support() {
//    add_theme_page('Theme support', 'Theme support', 'manage_options', 'avalon_themesupport', 'avalon_themesupport', '', 61);
//}
//
//function avalon_themesupport() {
//    include get_template_directory() . '/theme-support/avalon-theme-support.php';
//}

/**
 * Registers a widget area.
 * @since Avalon 1.0
 */
function avalon_widgets_init() {
    register_sidebar(array(
        'name' => __('Footer widget area', 'wp-avalon'),
        'id' => 'sidebar-footer',
        'description' => __('Appears at the bottom in content on all pages', 'wp-avalon'),
        'before_widget' => '<div class="col-md-4"><div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Frontpage multi-sidebar', 'wp-avalon'),
        'id' => 'sidebar-frontpage',
        'description' => __('Appears at the top side on frontpage', 'wp-avalon'),
        'before_widget' => '<div class="tab-pane" role="tabpanel" id="%1$s"><div class="multisidebar-widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Sidebar Left', 'wp-avalon'),
        'id' => 'sidebar-left',
        'description' => __('Appears at the left side on all pages', 'wp-avalon'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('Sidebar Right', 'wp-avalon'),
        'id' => 'sidebar-right',
        'description' => __('Appears at the right side on all pages', 'wp-avalon'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'avalon_widgets_init');

function avalon_registration_redirect($registration_redirect) {
    return site_url();
}

add_filter('registration_redirect', 'avalon_registration_redirect');

function avalon_contact_us() {
    
}

function empty_sidebar($sidebar) {
    if (is_active_sidebar($sidebar)) {
        return TRUE;
    } else {
        return FALSE;
    }
}

//Settings page functions
//include_once 'theme-support/avalon-theme-support-functions.php';


/**
 * Theme customizer
 */
include_once 'theme-support/avalon-customizer.php';

function avalon_customizer_live_preview() {
    wp_enqueue_script('avalon-theme-customizer', get_template_directory_uri() . '/js/avalon-customizer.js', array('jquery', 'customize-preview'), '', true);
}

add_action('customize_preview_init', 'avalon_customizer_live_preview');

function avalon_customizer_controls() {
    wp_enqueue_script('avalon-customizer-controls', get_template_directory_uri() . '/js/avalon-customizer-controls.js', array('jquery', 'customize-controls'), false, true);
    wp_enqueue_style('avalon-theme-customizer', get_template_directory_uri() . '/css/avalon-customizer.css');
}

add_action('customize_controls_enqueue_scripts', 'avalon_customizer_controls');

function default_contact_us() {
    parse_str($_POST['data'], $data);
    $user_name = $data['dcf_user_name'];
    $user_email = $data['dcf_user_email'];
    $user_message = $data['dcf_user_message'];
    $form_options = get_option('contact_us_area_form', '');
    $default_email = $form_options['default_form_email'];
    if (!empty($default_email)) {
        $form_email = $default_email;
    } else {
        $form_email = get_option('admin_email');
    }
    if (isset($data['dcf_user_email'])) {
        $to = $form_email;
        $from = $user_email;
        $name = $user_name;
        $text = $user_message;
        $subject = 'Contact form from ' . get_bloginfo('name');
        $message = $name . " (" . $from . ") \n\n" . $text;

        $headers = "From:" . $from;
        wp_mail($to, $subject, $message, $headers);
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
    die();
}

add_action('wp_ajax_default_contact_us', 'default_contact_us');
add_action('wp_ajax_nopriv_default_contact_us', 'default_contact_us');



/**
 * Add default widgets
 */
add_action('widgets_init', 'avalon_register_widgets');

function avalon_register_widgets() {

    register_widget('sidebar_headlights');
    register_widget('sidebar_avalon_overview');


    $avalon_sidebars = array(
        'sidebar-headlights' => 'sidebar-headlights',
        'sidebar-avalon-overview' => 'sidebar-avalon-overview'
    );

    /* Register sidebars */
    foreach ($avalon_sidebars as $avalon_sidebar):

        if ($avalon_sidebar == 'sidebar-headlights'):
            $avalon_sidebar_name = __('Headlights section widgets', 'wp-avalon');
        elseif ($avalon_sidebar == 'sidebar-avalon-overview') :
            $avalon_sidebar_name = __('Default property overview widgets', 'wp-avalon');
        endif;

        register_sidebar(
                array(
                    'name' => $avalon_sidebar_name,
                    'id' => $avalon_sidebar,
                    'before_widget' => '',
                    'after_widget' => ''
                )
        );

    endforeach;
}

add_action('after_switch_theme', 'avalon_register_default_widgets');

function avalon_register_default_widgets() {

    $avalon_frontpage_sidebars = array(
        'sidebar-headlights' => 'sidebar-headlights',
        'sidebar-avalon-overview' => 'sidebar-avalon-overview'
    );

    $active_widgets = get_option('sidebars_widgets');

    /**
     * Default Headlights widgets
     */
    if (empty($active_widgets[$avalon_frontpage_sidebars['sidebar-headlights']])):

        $avalon_counter = 1;

        /* widget #1 */
        $active_widgets['sidebar-headlights'][0] = 'avalon-headlight-widget-' . $avalon_counter;
        $headlight_widget_content[$avalon_counter] = array(
            'title' => 'WP-Property: Walk Score',
            'text' => 'Adds Walk Score\'s and Neighborhood Map\'s Widgets and Shortcodes to your Site powered by WP-Property plugin. And allows to sort and search your listings by Walk Score.',
            'link' => 'https://www.usabilitydynamics.com/product/wp-property-walkscore',
            'price' => '$35.00',
            'more_label' => 'More details',
            'image_uri' => get_template_directory_uri() . '/images/fhb__image-1.png'
        );
        update_option('widget_avalon-headlight-widget', $headlight_widget_content);
        $avalon_counter++;

        /* widget #2 */
        $active_widgets['sidebar-headlights'][] = 'avalon-headlight-widget-' . $avalon_counter;
        $headlight_widget_content[$avalon_counter] = array(
            'title' => 'WP-Property: Slideshow',
            'text' => 'Allows you to insert a slideshow into any property page, home page, or virtually anywhere in your blog.',
            'link' => 'https://www.usabilitydynamics.com/product/wp-property-slideshow',
            'price' => '$50.00',
            'more_label' => 'More details',
            'image_uri' => get_template_directory_uri() . '/images/fhb__image-2.png'
        );
        update_option('widget_avalon-headlight-widget', $headlight_widget_content);
        $avalon_counter++;

        /* widget #3 */
        $active_widgets['sidebar-headlights'][] = 'avalon-headlight-widget-' . $avalon_counter;
        $headlight_widget_content[$avalon_counter] = array(
            'title' => 'WP-Property: Super Map',
            'text' => 'Lets you put a large interactive map virtually anywhere in your WordPress setup. The map lets your visitors quickly view the location of all your properties, and filter them down by attributes.',
            'link' => 'https://www.usabilitydynamics.com/product/wp-property-supermap',
            'price' => '$50.00',
            'more_label' => 'More details',
            'image_uri' => get_template_directory_uri() . '/images/fhb__image-3.png'
        );
        update_option('widget_avalon-headlight-widget', $headlight_widget_content);
        $avalon_counter++;

        /* widget #4 */
        $active_widgets['sidebar-headlights'][] = 'avalon-headlight-widget-' . $avalon_counter;
        $headlight_widget_content[$avalon_counter] = array(
            'title' => 'WP-Property: Importer',
            'text' => 'The XMLI Importer enables you to automatically import property listings directly into your website. This includes MLS, RETS, XML, CSV formats. Properties are created, merged, removed, or updated according to rules you specify.',
            'link' => 'https://www.usabilitydynamics.com/product/wp-property-importer',
            'price' => '$175.00',
            'more_label' => 'More details',
            'image_uri' => get_template_directory_uri() . '/images/fhb__image-4.png'
        );
        update_option('widget_avalon-headlight-widget', $headlight_widget_content);
        $avalon_counter++;

        update_option('sidebars_widgets', $active_widgets);

    endif;

    if (empty($active_widgets[$avalon_frontpage_sidebars['sidebar-avalon-overview']])):

        $avalon_counter = 1;

        /* widget #1 */
        $active_widgets['sidebar-avalon-overview'][0] = 'avalon-property-overview-widget-' . $avalon_counter;
        $overview_widget_content[$avalon_counter] = array(
            'title' => __('250 S Estes Drive 52'),
            'location' => 'Chapel Hill,  North Carolina',
            'bads' => '1',
            'baths' => '2',
            'price' => '$79,500',
            'link' => '#',
            'image_uri' => get_template_directory_uri() . '/images/property_default_image_1.jpeg'
        );
        update_option('widget_avalon-property-overview-widget', $overview_widget_content);
        $avalon_counter++;

        /* widget #2 */
        $active_widgets['sidebar-avalon-overview'][] = 'avalon-property-overview-widget-' . $avalon_counter;
        $overview_widget_content[$avalon_counter] = array(
            'title' => __('2412 Environ Way 2412'),
            'location' => 'Chapel Hill,  North Carolina',
            'bads' => '3',
            'baths' => '2',
            'price' => '$475.000',
            'link' => '#',
            'image_uri' => get_template_directory_uri() . '/images/property_default_image_2.jpeg'
        );
        update_option('widget_avalon-property-overview-widget', $overview_widget_content);
        $avalon_counter++;

        /* widget #3 */
        $active_widgets['sidebar-avalon-overview'][] = 'avalon-property-overview-widget-' . $avalon_counter;
        $overview_widget_content[$avalon_counter] = array(
            'title' => __('5500 Fortunes Ridge Drive 78b'),
            'location' => 'Durham,  North Carolina',
            'bads' => '1',
            'baths' => '1',
            'price' => '$122.000',
            'link' => '#',
            'image_uri' => get_template_directory_uri() . '/images/property_default_image_3.jpeg'
        );
        update_option('widget_avalon-property-overview-widget', $overview_widget_content);
        $avalon_counter++;

        /* widget #4 */
        $active_widgets['sidebar-avalon-overview'][] = 'avalon-property-overview-widget-' . $avalon_counter;
        $overview_widget_content[$avalon_counter] = array(
            'title' => __('424 E Rose Street'),
            'location' => 'Smithfield,  North Carolina',
            'bads' => '3',
            'baths' => '1',
            'price' => '$99.000',
            'link' => '#',
            'image_uri' => get_template_directory_uri() . '/images/property_default_image_4.jpeg'
        );
        update_option('widget_avalon-property-overview-widget', $overview_widget_content);
        $avalon_counter++;

        update_option('sidebars_widgets', $active_widgets);

    endif;
}

add_action('admin_enqueue_scripts', 'avalon_sidebar_widget_scripts');

function avalon_sidebar_widget_scripts() {
    wp_enqueue_media();
    wp_enqueue_script('avalon_widget_scripts', get_template_directory_uri() . '/js/widget-media.js', false, '1.0', true);
}

class sidebar_headlights extends WP_Widget {

    public function __construct() {
        parent::__construct(
                'avalon-headlight-widget', __('WP Avalon - Headlight widget', 'wp-avalon')
        );
    }

    function widget($args, $instance) {
        extract($args);
        echo $before_widget;
        ?>

        <div class="col-lg-3 col-sm-3">
            <div class="fhwa__box">
                <?php if (!empty($instance['image_uri']) && ($instance['image_uri'] != 'Upload Image')) { ?>
                    <div class="fhwa__box_icon">
                        <?php if (!empty($instance['link'])) { ?>
                            <a href="<?php echo $instance['link']; ?>"><i style="background-image:url(<?php echo esc_url($instance['image_uri']); ?>);"></i></a>
                        <?php } else { ?>
                            <i style="background-image:url(<?php echo esc_url($instance['image_uri']); ?>);"></i>
                        <?php } ?>
                    </div>
                    <?php
                } elseif (!empty($instance['custom_media_id'])) {
                    $custom_media_id = wp_get_attachment_image_src($instance["custom_media_id"]);
                    if (!empty($custom_media_id) && !empty($custom_media_id[0])) {
                        ?>
                        <div class="fhwa__box_icon">
                            <?php if (!empty($instance['link'])) { ?>
                                <a href="<?php echo $instance['link']; ?>"><i style="background-image:url(<?php echo esc_url($custom_media_id[0]); ?>);"></i></a>
                            <?php } else { ?>
                                <i style="background-image:url(<?php echo esc_url($custom_media_id[0]); ?>);"></i>
                            <?php } ?>
                        </div>	
                        <?php
                    }
                }
                ?>

                <h3 class="fhwa__box_title">
                    <?php
                    if (!empty($instance['title'])): echo apply_filters('widget_title', $instance['title']);
                    endif;
                    ?>
                </h3>
                <?php
                if (!empty($instance['text'])) {
                    echo '<p>';
                    echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text']));
                    echo '</p>';
                }
                ?>	
            </div>
        </div>

        <?php
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {

        $instance = $old_instance;
        $instance['text'] = stripslashes(wp_filter_post_kses($new_instance['text']));
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['link'] = strip_tags($new_instance['link']);
        $instance['price'] = strip_tags($new_instance['price']);
        $instance['more_label'] = strip_tags($new_instance['more_label']);
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

        <input class="custom_media_id" id="<?php echo $this->get_field_id('custom_media_id'); ?>" name="<?php echo $this->get_field_name('custom_media_id'); ?>" type="hidden" value="<?php
               if (!empty($instance["custom_media_id"])): echo $instance["custom_media_id"];
               endif;
               ?>" />

        <?php
    }

}

class sidebar_avalon_overview extends WP_Widget {

    public function __construct() {
        parent::__construct(
                'avalon-property-overview-widget', __('WP Avalon - Property overview widget', 'wp-avalon')
        );
    }

    function widget($args, $instance) {
        extract($args);
        echo $before_widget;
        
        $custom_media_id = wp_get_attachment_image_src($instance["custom_media_id"] );
        ?>

        <div class="property_div property">
            <div class="property_div_box">
                <?php if( !empty($instance['image_uri']) && ($instance['image_uri'] != 'Upload Image') ) : ?>
                <div class="wpp_overview_left_column">
                    <div class="property_image">
                        <a rel="" class="property_overview_thumb fancybox_image thumbnail" title="<?php echo $instance['title']; ?>" href="<?php echo esc_url($instance['image_uri']); ?>">
                            <img width="300" height="300" style="width:300px;height:300px;" alt="<?php echo $instance['title']; ?>" src="<?php echo esc_url($instance['image_uri']); ?>">
                        </a>
                    </div>
                </div>
                <?php elseif( !empty($custom_media_id) && !empty($custom_media_id[0]) ) : ?>
                <div class="wpp_overview_left_column">
                    <div class="property_image">
                        <a rel="" class="property_overview_thumb fancybox_image thumbnail" title="<?php echo $instance['title']; ?>" href="<?php echo esc_url($custom_media_id[0]); ?>">
                            <img width="300" height="300" style="width:300px;height:300px;" alt="<?php echo $instance['title']; ?>" src="<?php echo esc_url($custom_media_id[0]); ?>">
                        </a>
                    </div>
                </div>
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
                                <?php if(!empty($instance['bads'])) : ?><li><label>Beds: </label><?php echo $instance['bads']; ?></li><?php endif; ?>
                                <?php if(!empty($instance['baths'])) : ?><li><label>Baths: </label><?php echo $instance['baths']; ?></li><?php endif; ?>
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
        $instance['bads'] = strip_tags($new_instance['bads']);
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
            <label for="<?php echo $this->get_field_id('bads'); ?>"><?php _e('Bads', 'wp-avalon'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('bads'); ?>" id="<?php echo $this->get_field_id('bads'); ?>" value="<?php
            if (!empty($instance['bads'])): echo $instance['bads'];
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
