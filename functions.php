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
    add_theme_support('custom-header');
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
add_action('admin_menu', 'avalon_theme_support');

function avalon_theme_support() {
    add_theme_page('Theme support', 'Theme support', 'manage_options', 'avalon_themesupport', 'avalon_themesupport', '', 61);
}

function avalon_themesupport() {
    include get_template_directory() . '/theme-support/avalon-theme-support.php';
}

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
//    register_sidebar(array(
//        'name' => __('Headlights section widgets', 'wp-avalon'),
//        'id' => 'sidebar-headlights',
//        'description' => __('Headlights section widgets area', 'wp-avalon'),
//        'before_widget' => '',
//        'after_widget' => '',
//        'before_title' => '<h2 class="widget-title">',
//        'after_title' => '</h2>',
//    ));
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

//Theme customizer
include_once 'theme-support/avalon-customizer.php';

//Settings page functions
include_once 'theme-support/avalon-theme-support-functions.php';

function avalon_customizer_live_preview()
{
	wp_enqueue_script( 
		  'avalon-theme-customizer',			//Give the script an ID
		  get_template_directory_uri() . '/js/avalon-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',						//Define a version (optional) 
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'avalon_customizer_live_preview' );

function avalon_customizer_controls() {
	wp_enqueue_script( 'avalon-customizer-controls', get_template_directory_uri() . '/js/avalon-customizer-controls.js', array( 'jquery', 'customize-controls' ), false, true );
}
add_action( 'customize_controls_enqueue_scripts', 'avalon_customizer_controls' );

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


    $avalon_sidebars = array(
        'sidebar-headlights' => 'sidebar-headlights'
    );

    /* Register sidebars */
    foreach ($avalon_sidebars as $avalon_sidebar):

        if ($avalon_sidebar == 'sidebar-headlights'):
            $avalon_sidebar_name = __('Headlights section widgets', 'wp-avalon');
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
        'widget-headlights' => 'widget-headlights'
    );

    $active_widgets = get_option('sidebars_widgets');

    /**
     * Default Headlights widgets
     */
//    if (empty($active_widgets[$avalon_frontpage_sidebars['widget-headlights']])):

        $avalon_counter = 1;

        /* widget #1 */
        $active_widgets['widget-headlights'][0] = 'avalon-headlight-widget-' . $avalon_counter;
        $headlight_widget_content[$avalon_counter] = array('title' => 'Title 1', 'text' => ' text 1 ', 'link' => '#', 'image_uri' => get_template_directory_uri() . "/images/fhb__image-1.png");
        update_option('widget_avalon-headlight-widget', $headlight_widget_content);
        $avalon_counter++;
        /* widget #2 */
        $active_widgets['widget-headlights'][] = 'avalon-headlight-widget-' . $avalon_counter;
        $headlight_widget_content[$avalon_counter] = array('title' => 'Title 2', 'text' => 'Text 2', 'link' => '#', 'image_uri' => get_template_directory_uri() . "/images/fhb__image-2.png");
        update_option('widget_avalon-headlight-widget', $headlight_widget_content);
        $avalon_counter++;
        /* widget #3 */
        $active_widgets['widget-headlights'][] = 'avalon-headlight-widget-' . $avalon_counter;
        $headlight_widget_content[$avalon_counter] = array('title' => 'Title 3', 'text' => 'Text 3', 'link' => '#', 'image_uri' => get_template_directory_uri() . "/images/fhb__image-3.png");
        update_option('widget_avalon-headlight-widget', $headlight_widget_content);
        $avalon_counter++;
        /* widget #4 */
        $active_widgets['widget-headlights'][] = 'avalon-headlight-widget-' . $avalon_counter;
        $headlight_widget_content[$avalon_counter] = array('title' => 'Title 4', 'text' => 'Text 4', 'link' => '#', 'image_uri' => get_template_directory_uri() . "/images/fhb__image-4.png");
        update_option('widget_avalon-headlight-widget', $headlight_widget_content);
        $avalon_counter++;

        update_option('sidebars_widgets', $active_widgets);

//    endif;

    /**
     * Default Testimonials widgets
     */
//    if (empty($active_widgets[$avalon_frontpage_sidebars['sidebar-testimonials']])):
//
//        $avalon_counter = 1;
//
//        /* testimonial widget #1 */
//        $active_widgets['sidebar-testimonials'][0] = 'zerif_testim-widget-' . $avalon_counter;
//        if (file_exists(get_stylesheet_directory_uri() . '/images/testimonial1.jpg')):
//            $testimonial_content[$avalon_counter] = array('title' => 'Dana Lorem', 'text' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.', 'image_uri' => get_stylesheet_directory_uri() . "/images/testimonial1.jpg");
//        else:
//            $testimonial_content[$avalon_counter] = array('title' => 'Dana Lorem', 'text' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.', 'image_uri' => get_template_directory_uri() . "/images/testimonial1.jpg");
//        endif;
//        update_option('widget_zerif_testim-widget', $testimonial_content);
//        $avalon_counter++;
//
//        /* testimonial widget #2 */
//        $active_widgets['sidebar-testimonials'][] = 'zerif_testim-widget-' . $avalon_counter;
//        if (file_exists(get_stylesheet_directory_uri() . '/images/testimonial2.jpg')):
//            $testimonial_content[$avalon_counter] = array('title' => 'Linda Guthrie', 'text' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.', 'image_uri' => get_stylesheet_directory_uri() . "/images/testimonial2.jpg");
//        else:
//            $testimonial_content[$avalon_counter] = array('title' => 'Linda Guthrie', 'text' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.', 'image_uri' => get_template_directory_uri() . "/images/testimonial2.jpg");
//        endif;
//        update_option('widget_zerif_testim-widget', $testimonial_content);
//        $avalon_counter++;
//
//        /* testimonial widget #3 */
//        $active_widgets['sidebar-testimonials'][] = 'zerif_testim-widget-' . $avalon_counter;
//        if (file_exists(get_stylesheet_directory_uri() . '/images/testimonial3.jpg')):
//            $testimonial_content[$avalon_counter] = array('title' => 'Cynthia Henry', 'text' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.', 'image_uri' => get_stylesheet_directory_uri() . "/images/testimonial3.jpg");
//        else:
//            $testimonial_content[$avalon_counter] = array('title' => 'Cynthia Henry', 'text' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur nec sem vel sapien venenatis mattis non vitae augue. Nullam congue commodo lorem vitae facilisis. Suspendisse malesuada id turpis interdum dictum.', 'image_uri' => get_template_directory_uri() . "/images/testimonial3.jpg");
//        endif;
//        update_option('widget_zerif_testim-widget', $testimonial_content);
//        $avalon_counter++;
//
//        update_option('sidebars_widgets', $active_widgets);
//
//    endif;
//
//    /**
//     * Default Our Team widgets
//     */
//    if (empty($active_widgets[$avalon_frontpage_sidebars['sidebar-ourteam']])):
//
//        $avalon_counter = 1;
//
//        /* our team widget #1 */
//        $active_widgets['sidebar-ourteam'][0] = 'zerif_team-widget-' . $avalon_counter;
//        $ourteam_content[$avalon_counter] = array('name' => 'ASHLEY SIMMONS', 'position' => 'Project Manager', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque', 'fb_link' => '#', 'tw_link' => '#', 'bh_link' => '#', 'db_link' => '#', 'ln_link' => '#', 'image_uri' => get_template_directory_uri() . "/images/team1.png");
//        update_option('widget_zerif_team-widget', $ourteam_content);
//        $avalon_counter++;
//
//        /* our team widget #2 */
//        $active_widgets['sidebar-ourteam'][] = 'zerif_team-widget-' . $avalon_counter;
//        $ourteam_content[$avalon_counter] = array('name' => 'TIMOTHY SPRAY', 'position' => 'Art Director', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque', 'fb_link' => '#', 'tw_link' => '#', 'bh_link' => '#', 'db_link' => '#', 'ln_link' => '#', 'image_uri' => get_template_directory_uri() . "/images/team2.png");
//        update_option('widget_zerif_team-widget', $ourteam_content);
//        $avalon_counter++;
//
//        /* our team widget #3 */
//        $active_widgets['sidebar-ourteam'][] = 'zerif_team-widget-' . $avalon_counter;
//        $ourteam_content[$avalon_counter] = array('name' => 'TONYA GARCIA', 'position' => 'Account Manager', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque', 'fb_link' => '#', 'tw_link' => '#', 'bh_link' => '#', 'db_link' => '#', 'ln_link' => '#', 'image_uri' => get_template_directory_uri() . "/images/team3.png");
//        update_option('widget_zerif_team-widget', $ourteam_content);
//        $avalon_counter++;
//
//        /* our team widget #4 */
//        $active_widgets['sidebar-ourteam'][] = 'zerif_team-widget-' . $avalon_counter;
//        $ourteam_content[$avalon_counter] = array('name' => 'JASON LANE', 'position' => 'Business Development', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque', 'fb_link' => '#', 'tw_link' => '#', 'bh_link' => '#', 'db_link' => '#', 'ln_link' => '#', 'image_uri' => get_template_directory_uri() . "/images/team4.png");
//        update_option('widget_zerif_team-widget', $ourteam_content);
//        $avalon_counter++;
//
//        update_option('sidebars_widgets', $active_widgets);
//
//    endif;
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

        <?php if (!empty($instance['image_uri']) && ($instance['image_uri'] != 'Upload Image')) { ?>

                <div class="service-icon">

            <?php if (!empty($instance['link'])) { ?>

                        <a href="<?php echo $instance['link']; ?>"><i class="pixeden" style="background:url(<?php echo esc_url($instance['image_uri']); ?>) no-repeat center;width:100%; height:100%;"></i> <!-- FOCUS ICON--></a>

            <?php } else { ?>

                        <i class="pixeden" style="background:url(<?php echo esc_url($instance['image_uri']); ?>) no-repeat center;width:100%; height:100%;"></i> <!-- FOCUS ICON-->

            <?php } ?>

                </div>

        <?php
        } elseif (!empty($instance['custom_media_id'])) {

            $zerif_ourfocus_custom_media_id = wp_get_attachment_image_src($instance["custom_media_id"]);
            if (!empty($zerif_ourfocus_custom_media_id) && !empty($zerif_ourfocus_custom_media_id[0])) {
                ?>

                    <div class="service-icon">

                <?php if (!empty($instance['link'])) { ?>

                            <a href="<?php echo $instance['link']; ?>"><i class="pixeden" style="background:url(<?php echo esc_url($zerif_ourfocus_custom_media_id[0]); ?>) no-repeat center;width:100%; height:100%;"></i> <!-- FOCUS ICON--></a>

                <?php } else { ?>

                            <i class="pixeden" style="background:url(<?php echo esc_url($zerif_ourfocus_custom_media_id[0]); ?>) no-repeat center;width:100%; height:100%;"></i> <!-- FOCUS ICON-->

                <?php } ?>

                    </div>	

                <?php
            }
        }
        ?>

            <h3 class="red-border-bottom"><?php if (!empty($instance['title'])): echo apply_filters('widget_title', $instance['title']);
        endif; ?></h3>
            <!-- FOCUS HEADING -->

        <?php
        if (!empty($instance['text'])) {
            echo '<p>';
            echo htmlspecialchars_decode(apply_filters('widget_title', $instance['text']));
            echo '</p>';
        }
        ?>	

        </div>

        <?php
        echo $after_widget;
    }

    function update($new_instance, $old_instance) {

        $instance = $old_instance;
        $instance['text'] = stripslashes(wp_filter_post_kses($new_instance['text']));
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['link'] = strip_tags($new_instance['link']);
        $instance['image_uri'] = strip_tags($new_instance['image_uri']);
        $instance['custom_media_id'] = strip_tags($new_instance['custom_media_id']);

        return $instance;
    }

    function form($instance) {
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'wp-avalon'); ?></label><br/>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php if (!empty($instance['title'])): echo $instance['title'];
        endif; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Text', 'wp-avalon'); ?></label><br/>
            <textarea class="widefat" rows="8" cols="20" name="<?php echo $this->get_field_name('text'); ?>" id="<?php echo $this->get_field_id('text'); ?>"><?php if (!empty($instance['text'])): echo htmlspecialchars_decode($instance['text']);
        endif; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Link', 'wp-avalon'); ?></label><br />
            <input type="text" name="<?php echo $this->get_field_name('link'); ?>" id="<?php echo $this->get_field_id('link'); ?>" value="<?php if (!empty($instance['link'])): echo $instance['link'];
        endif; ?>" class="widefat">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('image_uri'); ?>"><?php _e('Image', 'wp-avalon'); ?></label><br/>
        <?php
        if (!empty($instance['image_uri'])) :
            echo '<img class="custom_media_image" src="' . $instance['image_uri'] . '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" alt="' . __('Uploaded image', 'wp-avalon') . '" /><br />';
        endif;
        ?>

            <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php if (!empty($instance['image_uri'])): echo $instance['image_uri'];
        endif; ?>" style="margin-top:5px;">

            <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name('image_uri'); ?>" value="<?php _e('Upload Image', 'wp-avalon'); ?>" style="margin-top:5px;"/>
        </p>

        <input class="custom_media_id" id="<?php echo $this->get_field_id('custom_media_id'); ?>" name="<?php echo $this->get_field_name('custom_media_id'); ?>" type="hidden" value="<?php if (!empty($instance["custom_media_id"])): echo $instance["custom_media_id"];
        endif; ?>" />

        <?php
    }

}
