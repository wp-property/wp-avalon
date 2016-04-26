<?php
/**
 * Template part for property search on front page
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$sidebar_name = 'sidebar-frontpage';
$active_default = get_option('show_default_property_search_value', '1');
print_r($active_default);
if (is_active_sidebar($sidebar_name) || (function_exists('ud_check_wp_property') && ($active_default == '1'))) {
    global $wp_registered_sidebars, $wp_registered_widgets;
    $sidebar_widgets = wp_get_sidebars_widgets();
    $sw__list = $sidebar_widgets[$sidebar_name];
    ?>
    <div class="frontpage-widgetaria-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <?php if (function_exists('ud_check_wp_property') && ($active_default == '1')) : ?>
                <li role="presentation" class="active">
                    <a href="#property-search-defaul" aria-controls="property-search-defaul" role="tab" data-toggle="tab"><?php _e('Property search'); ?></a>
                </li>
                <?php
            else :
                $active_tab_head = 'active';
            endif;
            foreach ($sw__list as $id) :
                ?>
                <li role="presentation" class="<?php echo $active_tab_head; ?>">
                    <a href="#<?php echo $wp_registered_widgets[$id]['id']; ?>" aria-controls="<?php echo $wp_registered_widgets[$id]['id']; ?>" role="tab" data-toggle="tab"><?php echo $wp_registered_widgets[$id]['name']; ?></a>
                </li>
                <?php
                $active_tab_head = '';
            endforeach;
            ?>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <?php if (function_exists('ud_check_wp_property') && ($active_default == '1')) : ?>
                <div id="property-search-defaul" role="tabpanel" class="property-search-defaul tab-pane active">
                    <div class="multisidebar-widget widget_text">
                        <h2 class="widget-title"><?php _e('Property search'); ?></h2>
                        <div class="widget-content">
                            <?php echo do_shortcode('[property_search]'); ?>
                        </div>
                    </div>
                </div>
                <?php
            endif;
            dynamic_sidebar($sidebar_name);
            ?>
        </div>
    </div>
<?php } ?>