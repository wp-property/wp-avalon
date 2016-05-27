<?php
/*
 * Template part for header bar
 * 
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$contuctus_disable = get_theme_mod('header_contuctus_disable_settings', '');
$contuctus_title = get_theme_mod('header_contuctus_title_settings', __('CONTACT FORM', 'wp-avalon'));
$contuctus_description = get_theme_mod('header_contuctus_description_settings', __('Quisque tincidunt ornare sapien, at commodo ante tristique non. Integer id tellus nisl. Donec eget nunc eget odio malesuada egestas.', 'wp-avalon'));
$form_settings = get_theme_mod('header_contuctus_form_settings', 'default');
$CF_shortcode = get_theme_mod('header_contuctus_shortcode_settings', '');
$CF_styles = get_theme_mod('header_contuctus_css_settings', '');
$location_disable = get_theme_mod('header_location_area_settings', '');
$location_title = get_theme_mod('header_location_area_title', __('Location & Address', 'wp-avalon'));
$location_map_code = get_theme_mod('header_location_area_map_location', '');
$location_map_image = get_theme_mod('header_location_area_image', '');
$location_text = get_theme_mod('header_location_area_description', '');
if ($contuctus_disable != 1) :
  ?>
  <div class="header-bar" id="contacts-bar" data-template="template-parts/header/header-bar">
    <div class="container">
      <button class="close-bar-box"></button>
      <div class="row">
        <div class="col-md-6
        <?php if ($location_disable == 1) echo ' col-md-offset-3'; ?>
             ">
          <div class="hb__contact-form">
            <?php
            if (!empty($contuctus_title)) :
              echo '<div class="hb__title">';
              echo $contuctus_title;
              echo '</div>';
            endif;

            if (!empty($contuctus_description)) :
              echo '<div class="hbcf__description">';
              echo do_shortcode($contuctus_description);
              echo '</div>';
            endif;
            ?>
            <div class="hbcf__container">
              <?php
              if ($form_settings == 'default') {
                get_template_part('template-parts/forms/default-contact-us', 'wp-avalon');
              } elseif (!empty($CF_shortcode)) {
                echo do_shortcode($CF_shortcode);
                if (!empty($CF_styles)) {
                  echo '<style type="text/css">';
                  echo $CF_styles;
                  echo '</style>';
                }
              }
              ?>
            </div>
          </div>
        </div>
        <?php if ($location_disable != 1) : ?>
          <div class="col-md-6
          <?php if ($contuctus_disable == 1) echo ' col-md-offset-3'; ?>
               ">
            <div class="hb__location">
              <div class="hb__title"><?php echo $location_title; ?></div>
              <div class="hbl__content">
                <?php if (!empty($location_map_code) || !empty($location_map_image)) : ?>
                  <div class="row">
                    <div class="col-md-12">
                      <?php
                      if (!empty($location_map_code)) :
                        ?>
                        <div class="google-map-box">
                          <input id="adress" type="hidden" value="<?php echo $location_map_code; ?>" />
                          <div id="map" style="width: 100%; height: 300px;"></div>
                          <script type="text/javascript">
                            function MapInit() {
                              geocoder = new google.maps.Geocoder();
                              var address = document.getElementById("adress").value;

                              geocoder.geocode({'address': address}, function(results, status) {
                                if (status == google.maps.GeocoderStatus.OK) {
                                  //In this case it creates a marker, but you can get the lat and lng from the location.LatLng
                                  map_box.setCenter(results[0].geometry.location);
                                  var marker = new google.maps.Marker({
                                    map: map_box,
                                    position: results[0].geometry.location
                                  });
                                } else {
                                  alert("Geocode was not successful for the following reason: " + status);
                                }
                              });
                              var styles = [{"featureType": "landscape", "stylers": [{"hue": "#FFBB00"}, {"saturation": 43.400000000000006}, {"lightness": 37.599999999999994}, {"gamma": 1}]}, {"featureType": "road.highway", "stylers": [{"hue": "#FFC200"}, {"saturation": -61.8}, {"lightness": 45.599999999999994}, {"gamma": 1}]}, {"featureType": "road.arterial", "stylers": [{"hue": "#FF0300"}, {"saturation": -100}, {"lightness": 51.19999999999999}, {"gamma": 1}]}, {"featureType": "road.local", "stylers": [{"hue": "#FF0300"}, {"saturation": -100}, {"lightness": 52}, {"gamma": 1}]}, {"featureType": "water", "stylers": [{"hue": "#0078FF"}, {"saturation": -13.200000000000003}, {"lightness": 2.4000000000000057}, {"gamma": 1}]}, {"featureType": "poi", "stylers": [{"hue": "#00FF6A"}, {"saturation": -1.0989010989011234}, {"lightness": 11.200000000000017}, {"gamma": 1}]}];
                              var header_map_Options = {
                                zoom: 13,
                                center: new google.maps.LatLng(0,0),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                              };
                              map_box = new google.maps.Map(document.getElementById('map'), header_map_Options);
                              map_box.setOptions({styles: styles});
                            }
                          </script>
                        </div>
                      <?php elseif (!empty($location_map_image)) : ?>
                        <img width="100%" height="auto" src="<?php echo $location_map_image; ?>" alt="Location map" />
                      <?php endif; ?>
                    </div>
                  </div>
                <?php endif; ?>
                <div class="row">
                  <div class="col-md-12 hbl__description">
                    <?php
                    if (!empty($location_text)) :
                      echo do_shortcode($location_text);
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
  </div>
  <?php
endif;
?>
<div class="header-bar" id="login-bar" data-template="template-parts/header/header-bar">
  <div class="container">
    <button class="close-bar-box"></button>
    <div class="row">
      <div class="col-md-6">
        <div class="hb__loginform">
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="hb__title"><?php _e('Login form', 'wp-avalon'); ?></div>
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
                <div class="hb__title"><?php _e('Registration form', 'wp-avalon'); ?></div>
                <div class="hbr__container">
                  <form action="<?php echo site_url('wp-login.php?action=register') ?>" method="POST">
                    <p>
                      <label for="user_login"><?php _e('Your Login', 'wp-avalon'); ?></label>
                      <input class="form-control" type="text" name="user_login" value="" placeholder="User" />
                    </p>
                    <p>
                      <label for="user_login"><?php _e('Your Email', 'wp-avalon'); ?></label>
                      <input class="form-control" type="email" name="user_email" value="" placeholder="Email" />
                    </p>
                    <p><button class="btn btn-primary"><?php _e('Register', 'wp-avalon'); ?></button></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <?php } else { ?>
          <div class="hb__title"><?php _e('Sorry, User can NOT register!', 'wp-avalon'); ?></div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>