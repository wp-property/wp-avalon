<?php
/**
 * Template part for frontpage multi-sidebar widget area
 *
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$sidebar_name = 'sidebar-frontpage';
$active_sidebar = get_theme_mod('frontpage_top_widget_area_settings', '');
if ($active_sidebar != 1 && is_active_sidebar($sidebar_name)) :
    global $wp_registered_sidebars, $wp_registered_widgets;
    $sidebar_widgets = wp_get_sidebars_widgets();
    $sw__list = $sidebar_widgets[$sidebar_name];
    ?>
    <div class="frontpage-widgetaria-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <?php
            $active_tab_head = 'active';
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
            <?php dynamic_sidebar($sidebar_name); ?>
        </div>
    </div>
<?php endif;