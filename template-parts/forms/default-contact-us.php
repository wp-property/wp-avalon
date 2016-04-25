<?php
/*
 * Temlate for default "Contact us" form
 */
?>
<form id="header-contact-form" class="header-contact-form" method="POST" action="">
    <div class="row">
        <div class="col-md-6"><input id="dcf_user_name" type="text" name="dcf_user_name" class="form-control" value="" placeholder="<?php _e('Your Name'); ?>" /></div>
        <div class="col-md-6"><input id="dcf_user_email" type="email" name="dcf_user_email" class="form-control" value="" placeholder="<?php _e('Your Email'); ?>" /></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <textarea id="dcf_user_message" class="form-control" name="dcf_user_message" placeholder="<?php _e('Your Message'); ?>"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <span class="submit-btn btn btn-primary"><?php _e('SEND'); ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="dcf__message_box"></div>
            <div class="dcf__success_message_box"></div>
        </div>
    </div>
</form>
<?php
