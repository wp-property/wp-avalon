<?php
global $wpdb;

if (!empty($_POST['front-page-default-search'])) {
    update_option('front-page-default-search', $_POST['front-page-default-search']);
}
?>

<div class="admin-wrap clearfix">
    <h2><?php _e('Theme options'); ?></h2>

    <div class="aw__container">

        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#front-page" aria-controls="front-page" role="tab" data-toggle="tab"><?php _e('Front page'); ?></a>
            </li>
            <li role="presentation" class="">
                <a href="#second-page" aria-controls="second-page" role="tab" data-toggle="tab"><?php _e('Second page'); ?></a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="front-page" role="tabpanel" class="tab-pane active">
                <form method="post">
                    <ul>
                        <li>
                            <label><?php _e('Show default prpperty search on top widget area'); ?></label>
                            <div>
                                <p><input type="radio" name="yes" value="<?php echo get_option('front-page-default-search'); ?>" /> Yes</p>
                                <p><input type="radio" name="no" value="<?php echo get_option('front-page-default-search'); ?>" /> No</p>
                            </div>
                        </li>
                    </ul>
                    <p><button class="btn btn-primary"><?php _e('Save'); ?></button></p>
                </form>
            </div>
            <div id="second-page" role="tabpanel" class="tab-pane">

            </div>
        </div>
    </div>
    <?php
    ?>
</div>
