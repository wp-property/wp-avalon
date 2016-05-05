<?php
/**
 * Front page headlights section template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('headlights_disable_setting', '');
$enable_box_1 = get_theme_mod('headlight_1_box_hidden_settings', '');
$enable_box_2 = get_theme_mod('headlight_2_box_hidden_settings', '');
$enable_box_3 = get_theme_mod('headlight_3_box_hidden_settings', '');
$enable_box_4 = get_theme_mod('headlight_4_box_hidden_settings', '');
$j = 0;
$name = array('headlight_1_box_hidden_settings', 'headlight_2_box_hidden_settings', 'headlight_3_box_hidden_settings', 'headlight_4_box_hidden_settings');
for ($i = 0; $i <= 3; $i++) {
    $box = get_theme_mod($name[$i], '');
    if ($box != 1) {
        $j++;
    }
}
$count = 12 / $j;
$box_class = 'col-md-' . $count;

if ($enable_section != 1) :
    ?>
    <div class="frontpage-headlights">
        <div class="row">
            <div class="col-md-12">
                <div class="fh__title"><?php echo get_theme_mod('headlights_title_setting', __('Recommended add-ons', 'wp-avalon')); ?></div>
            </div>
        </div>
        <div class="row fh__container">
            <?php
            if ($enable_box_1 != 1) :
                ?>
                <!--First box-->
                <div class="<?php echo $box_class; ?>">
                    <div class="fh__box">
                        <div class="fhb__image">
                            <a href="<?php echo get_theme_mod('headlight_1_box_url_settings', '#'); ?>">
                                <img alt="<?php echo get_theme_mod('headlight_1_box_title_settings', __('WP-Property: Walk Score', 'wp-avalon')); ?>" src="<?php echo get_theme_mod('headlight_1_box_image_settings', get_template_directory_uri() . '/images/fhb__image-1.png'); ?>" />
                            </a>
                        </div>
                        <div class="fhb__title">
                            <a href="<?php echo get_theme_mod('headlight_1_box_url_settings', '#'); ?>">
                                <?php echo get_theme_mod('headlight_1_box_title_settings', __('WP-Property: Walk Score', 'wp-avalon')); ?>
                            </a>
                        </div>
                        <div class="fhb__excerpt"><?php echo get_theme_mod('headlight_1_box_excerpt_settings', __('Adds Walk Score\'s and Neighborhood Map\'s Widgets and Shortcodes to your Site powered by WP-Property plugin. And allows to sort and search your listings by Walk Score.', 'wp-avalon')); ?></div>
                        <div class="fhb__price"><?php echo get_theme_mod('headlight_1_box_price_settings', '$50.00'); ?></div>
                        <div class="fhb__more">
                            <a href="<?php echo get_theme_mod('headlight_1_box_url_settings', '#'); ?>" class="fhb__more_button"><?php echo get_theme_mod('headlight_1_box_more_settings', 'More details'); ?></a>
                        </div>
                    </div>
                </div>
                <!--First box-->
                <?php
            endif;
            if ($enable_box_2 != 1) :
                ?>
                <!--Second box-->
                <div class="<?php echo $box_class; ?>">
                    <div class="fh__box">
                        <div class="fhb__image">
                            <a href="<?php echo get_theme_mod('headlight_2_box_url_settings', '#'); ?>">
                                <img alt="<?php echo get_theme_mod('headlight_2_box_title_settings', __('WP-Property: Slideshow', 'wp-avalon')); ?>" src="<?php echo get_theme_mod('headlight_2_box_image_settings', get_template_directory_uri() . '/images/fhb__image-2.png'); ?>" />
                            </a>
                        </div>
                        <div class="fhb__title">
                            <a href="<?php echo get_theme_mod('headlight_2_box_url_settings', '#'); ?>">
                                <?php echo get_theme_mod('headlight_2_box_title_settings', __('WP-Property: Slideshow', 'wp-avalon')); ?>
                            </a>
                        </div>
                        <div class="fhb__excerpt"><?php echo get_theme_mod('headlight_2_box_excerpt_settings', __('Allows you to insert a slideshow into any property page, home page, or virtually anywhere in your blog.', 'wp-avalon')); ?></div>
                        <div class="fhb__price"><?php echo get_theme_mod('headlight_2_box_price_settings', '$50.00'); ?></div>
                        <div class="fhb__more">
                            <a href="<?php echo get_theme_mod('headlight_2_box_url_settings', '#'); ?>" class="fhb__more_button"><?php echo get_theme_mod('headlight_2_box_more_settings', 'More details'); ?></a>
                        </div>
                    </div>
                </div>
                <!--Second box-->
                <?php
            endif;
            if ($enable_box_3 != 1) :
                ?>
                <!--Third box-->
                <div class="<?php echo $box_class; ?>">
                    <div class="fh__box">
                        <div class="fhb__image">
                            <a href="<?php echo get_theme_mod('headlight_3_box_url_settings', '#'); ?>">
                                <img alt="<?php echo get_theme_mod('headlight_3_box_title_settings', __('WP-Property: Super Map', 'wp-avalon')); ?>" src="<?php echo get_theme_mod('headlight_3_box_image_settings', get_template_directory_uri() . '/images/fhb__image-3.png'); ?>" />
                            </a>
                        </div>
                        <div class="fhb__title">
                            <a href="<?php echo get_theme_mod('headlight_3_box_url_settings', '#'); ?>">
                                <?php echo get_theme_mod('headlight_3_box_title_settings', __('WP-Property: Super Map', 'wp-avalon')); ?>
                            </a>
                        </div>
                        <div class="fhb__excerpt"><?php echo get_theme_mod('headlight_3_box_excerpt_settings', __('Lets you put a large interactive map virtually anywhere in your WordPress setup. The map lets your visitors quickly view the location of all your properties, and filter them down by attributes.', 'wp-avalon')); ?></div>
                        <div class="fhb__price"><?php echo get_theme_mod('headlight_3_box_price_settings', '$50.00'); ?></div>
                        <div class="fhb__more">
                            <a href="<?php echo get_theme_mod('headlight_3_box_url_settings', '#'); ?>" class="fhb__more_button"><?php echo get_theme_mod('headlight_3_box_more_settings', 'More details'); ?></a>
                        </div>
                    </div>
                </div>
                <!--Third box-->
                <?php
            endif;
            if ($enable_box_4 != 1) :
                ?>
                <!--Fourth box-->
                <div class="<?php echo $box_class; ?>">
                    <div class="fh__box">
                        <div class="fhb__image">
                            <a href="<?php echo get_theme_mod('headlight_4_box_url_settings', '#'); ?>">
                                <img alt="<?php echo get_theme_mod('headlight_4_box_title_settings', __('WP-Property: Importer', 'wp-avalon')); ?>" src="<?php echo get_theme_mod('headlight_4_box_image_settings', get_template_directory_uri() . '/images/fhb__image-4.png'); ?>" />
                            </a>
                        </div>
                        <div class="fhb__title">
                            <a href="<?php echo get_theme_mod('headlight_4_box_url_settings', '#'); ?>">
                                <?php echo get_theme_mod('headlight_4_box_title_settings', __('WP-Property: Importer', 'wp-avalon')); ?>
                            </a>
                        </div>
                        <div class="fhb__excerpt"><?php echo get_theme_mod('headlight_4_box_excerpt_settings', __('The XMLI Importer enables you to automatically import property listings directly into your website. This includes MLS, RETS, XML, CSV formats. Properties are created, merged, removed, or updated according to rules you specify.', 'wp-avalon')); ?></div>
                        <div class="fhb__price"><?php echo get_theme_mod('headlight_4_box_price_settings', '$50.00'); ?></div>
                        <div class="fhb__more">
                            <a href="<?php echo get_theme_mod('headlight_4_box_url_settings', '#'); ?>" class="fhb__more_button"><?php echo get_theme_mod('headlight_4_box_more_settings', 'More details'); ?></a>
                        </div>
                    </div>
                </div>
                <!--Fourth box-->
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="view-more-headlights">
                    <a href="#" class="view-more-headlights-button">Get More Headlights!</a>
                </div>
            </div>
        </div>
    </div>
<?php endif;

