<?php
/*
 * Template part for header bar
 * 
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
<div class="header-bar" id="contacts-bar" >
    <div class="container">
        <div class="col-md-6">
            <div class="hb__contact-form">
                <div class="hb__title">CONTACT FORM</div>
                <div class="hbcf__description">
                    Quisque tincidunt ornare sapien, at commodo ante tristique non. Integer id tellus nisl. Donec eget nunc eget odio malesuada egestas.
                </div>
                <div class="hbcf__container">
                    <form class="header-contact-form" method="POST" action="">
                        <div class="row">
                            <div class="col-md-6"><input type="text" name="name" class="form-control" value="" placeholder="Name" /></div>
                            <div class="col-md-6"><input type="email" name="email" class="form-control" value="" placeholder="Email" /></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="submit-btn btn btn-primary">SEND</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="hb__location">
                <div class="hb__title">Location & Address</div>
                <div class="hbl__content">
                    <div class="row">
                        <div class="col-md-12">
                            <img width="100%" height="auto" src="<?php echo get_template_directory_uri(); ?>/images/location-map.jpg" alt="Location map" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Head Office</h5>
                            <p>Reiner street 5, Los Angeles, CA 48523<br />
                                Phone: +32 (0)2 494 01 28<br />
                                Email: <a href="mailto:hidentica@gmail.com">hidentica@gmail.com</a></p>
                        </div>
                        <div class="col-md-6">
                            <h5>Representative</h5>
                            <p>Winsont F. st. 10, New York, 48523<br />
                                Phone: +32 (0)2 494 01 28<br />
                                Email: <a href="mailto:hidentica@gmail.com">hidentica@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-bar" id="login-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="hb__loginform">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="hb__title">Login form</div>
                            <?php wp_login_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <?php if (get_option('users_can_register')) { ?>
                    <div class="hb__registerform">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="hb__title">Registration form</div>
                                <div class="hbr__container">
                                    <form action="<?php echo site_url('wp-login.php?action=register') ?>" method="POST">
                                        <p>
                                            <label for="user_login">Your Login</label>
                                            <input class="form-control" type="text" name="user_login" value="" placeholder="User" />
                                        </p>
                                        <p>
                                            <label for="user_login">Your Email</label>
                                            <input class="form-control" type="email" name="user_email" value="" placeholder="Email" />
                                        </p>
                                        <p><button class="btn btn-primary">Register</button></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="hb__title">Sorry, User can NOT register!</div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>