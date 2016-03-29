<div class="header-bar">
    <div class="container">
        <div id="contacts-bar" class="hb__container">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        <div id="login-bar" class="hb__container">
            <div class="col-md-6">
                Login form here
            </div>
            <div class="col-md-6">
                <?php if ( get_option( 'users_can_register' ) ) { ?>
                User can register!
                <?php } else { ?>
                User can NOT register!
                <?php } ?>
            </div>
        </div>
    </div>
</div>