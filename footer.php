<?php
/**
 * The template for displaying the footer
 * 
 * @package Usability Dynamics, Inc.
 * @subpackage Avalon
 * @since Avalon 1.0
 */
?>
</main><!-- .main-content -->
<footer class="footer">
  <?php get_template_part('template-parts/footer/footer-widget-area', 'wp-avalon'); ?>
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="logotype col-md-3">
          <?php get_template_part('template-parts/footer/footer', 'logo'); ?>
        </div>
        <div class="copyrights col-md-6">
          <p>
            <?php
            $avalon_copyrights_settings = get_theme_mod('avalon_copyrights_settings');
            if (!empty($avalon_copyrights_settings)) :
              echo get_theme_mod('avalon_copyrights_settings');
            else :
              printf(__('&copy;%s WP Avalon. All rights reserved.', 'wp-avalon'), date("Y"));
            endif;
            ?>
          </p>
        </div>
        <div class="socials col-md-3"></div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>