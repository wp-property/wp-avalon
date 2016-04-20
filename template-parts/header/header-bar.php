<?php
/*
 * Template part for header bar
 * 
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$area_options = get_option('contact_us_area_settings');
$form_options = get_option('contact_us_area_form');
$location_area = get_option('location_area');
$CF_shortcode = $form_options['shortcode'];
$CF_styles = $form_options['styles'];
?>
<div class="header-bar" id="contacts-bar" >
    <div class="container">
        <div class="col-md-6
        <?php if ($location_area['value'] == '1') echo ' col-md-offset-3'; ?>
             ">
            <div class="hb__contact-form">
                <div class="hb__title"><?php echo (!empty($area_options['title'])) ? $area_options['title'] : __('CONTACT FORM'); ?></div>
                <?php
                if (!empty($area_options['description'])) {
                    echo '<div class="hbcf__description">';
                    echo $area_options['description'];
                    echo '</div>';
                }
                ?>
                <div class="hbcf__container">
                    <?php
                    if ($form_options['value'] == '1' && (!empty($CF_shortcode))) {
                        $admin_email = $form_options['default_email'];
                        ?>
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
                        <?php
                    } else {
                        echo do_shortcode($CF_shortcode);
                        if (!empty($CF_styles)) {
                            ?>
                            <style type="text/css">
        <?php echo $CF_styles; ?>
                            </style>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php if ($location_area['value'] == '2') : ?>
            <div class="col-md-6">
                <?php
                $location_title = $location_area['title'];
                $location_map_code = $location_area['map_code'];
                $location_map_image = $location_area['map_image'];
                $location_text = $location_area['text'];
                ?>
                <div class="hb__location">
                    <div class="hb__title"><?php echo (!empty($location_title)) ? $location_title : __('Location & Address'); ?></div>
                    <div class="hbl__content">
                        <?php if (!empty($location_map_code) || !empty($location_map_image)) : ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    if (!empty($location_map_code)) :
                                        ?>
                                        <div class="google-map-box">
                                            <input id="adress" name="location_area[map_code]" type="hidden" value="<?php echo $location_map_code; ?>" />
                                            <div id="map" style="width: 100%; height: 300px;"></div>
                                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUNObksOUAhhcLRd1qGEyL_tnypxhtPPU&libraries=places&callback=initAutocomplete"
                                            async defer></script>
                                            <script type="text/javascript">
                                                function MapInit() {
                                                    geocoder = new google.maps.Geocoder();
                                                    var address = document.getElementById("adress").value;

                                                    geocoder.geocode({'address': address}, function(results, status) {
                                                        if (status == google.maps.GeocoderStatus.OK) {
                                                            //In this case it creates a marker, but you can get the lat and lng from the location.LatLng
                                                            map_box.setCenter(results[0].geometry.location);
                                                            var latlng = new google.maps.LatLng(results[0].geometry.location);
                                                            var marker = new google.maps.Marker({
                                                                map: map_box,
                                                                position: results[0].geometry.location,
                                                                center: latlng
                                                            });
                                                            console.log(results[0]);
                                                        } else {
                                                            alert("Geocode was not successful for the following reason: " + status);
                                                        }
                                                    });
                                                    map_box = new google.maps.Map(document.getElementById('map'), {
                                                        center: {lat: 0, lng: 0},
                                                        zoom: 14,
                                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                                    });
                                                }
                                            </script>
                                        </div>
                                        <?php
                                    else :
                                        ?>
                                        <img width="100%" height="auto" src="<?php echo $location_map_image; ?>" alt="Location map" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                if (!empty($location_text)) :
                                    echo $location_text;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
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