</main><!-- .main-content -->
<footer class="footer">
    <?php get_template_part('template-parts/footer/footer-widget-area', 'avalon'); ?>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="logotype col-md-3">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-icon.png" />
                        <span>Unreal Estate</span>
                    </a>
                </div>
                <div class="copyrights col-md-6">
                    <p>&copy; <?php echo date("Y"); ?> Unreal Estate. All rights reserved.</p>
                </div>
                <div class="socials col-md-3"></div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>