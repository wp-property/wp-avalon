<?php
/**
 * Front page addons widget area template file
 *
 * @package UD
 * @subpackage Avalon
 * @since Avalon 1.0
 */
$enable_section = get_theme_mod('flip_section_disable', '');
$section_title = get_theme_mod('flip_section_title', __('WP-Property addons', 'wp-avalon'));
if ($enable_section != 1) :
  ?>
  <div class="frontpage-flip-widget-area" data-template="template-parts/front-page/frontpage-flip-widget-area">
      <div class="row">
        <div class="col-md-12">
          <div class="ffwa__title" style="display: <?php echo $section_title ? 'block' : 'none'; ?>">
            <?php echo $section_title; ?>
          </div>
        </div>
      </div>
    <div class="row ffwa__container">
      <?php
      if (is_active_sidebar('flip-section')) :
        dynamic_sidebar('flip-section');
      else :
        /* widget #1 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: Walk Score', 'wp-avalon'),
          'description' => __('Adds Walk Score\'s and Neighborhood Map\'s Widgets and Shortcodes to your Site powered by WP-Property plugin. And allows to sort and search your listings by Walk Score.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-walkscore',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-1.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #2 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-CRM: Group Messages', 'wp-avalon'),
          'description' => __('Send group messages to your users from within your WordPress control panel.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-crm-group-messages',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-5.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #3 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Invoice: Business Locations', 'wp-avalon'),
          'description' => __('Free Add-on to manage locations for your business built with WP-Invoice plugin.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-business-locations',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-6.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #4 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Invoice: Electronic Signature', 'wp-avalon'),
          'description' => __('Make your clients sign invoices before payment to get secure information that will confirm payment.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-electronic-signature',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-7.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #5 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Invoice: Paypal Pro', 'wp-avalon'),
          'description' => __('PayPal Payments Pro has the customization capability, technical maturity, and proven security that is needed to build professional-grade eCommerce sites.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-paypal-pro',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-8.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #6 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Invoice: PDF', 'wp-avalon'),
          'description' => __('Creates PDF versions of your invoices, receipts and that you can easily email and print.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-pdf',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-9.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #7 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Invoice: Power Tools', 'wp-avalon'),
          'description' => __('Make you invoicing solutions more powerful with WP-Invoice and Power Tools. Sales charts, import and export ability!', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-power-tools',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-10.jpg'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #8 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Invoice: Quotes', 'wp-avalon'),
          'description' => __('The Quotes Add-on let\'s you automate your workflow by creating quotes and letting your clients ask questions regarding quotes directly on your website. Once a quote is approved, it is converted to an invoice with a single click.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-quotes',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-11.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #9 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Invoice: Single Page Checkout', 'wp-avalon'),
          'description' => __('Makes it easy to create one-page-checkout forms that can accept a variety of different payment gateways, such as Authorize.net, PayPal and others.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-single-page-checkout',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-12.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #10 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Invoice: USAePay', 'wp-avalon'),
          'description' => __('USAePay is a payment gateway service provider allowing merchants to accept credit card and electronic check payments through their Web site and mobile devices.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-usa-epay',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-13.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #11 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: Agents', 'wp-avalon'),
          'description' => __('Allows to create new Real Estate agent accounts, associate them with properties, filter properties by agent and more.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-agents',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-14.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #12 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: Facebook Tabs', 'wp-avalon'),
          'description' => __('The Add-on allows you to add a tab with property listings or any other content from your website, on a Facebook Page.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-facebook-tabs',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-15.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #13 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: FEPS', 'wp-avalon'),
          'description' => __('Allows to create front-end forms that facilitate a simple way for website visitors to submit, edit and delete listings from frontend. Listings can be submitted for free or you can use Sponsored Listings option.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-feps',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-16.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #14 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: Importer', 'wp-avalon'),
          'description' => __('The XMLI Importer enables you to automatically import property listings directly into your website. This includes MLS, RETS, XML, CSV formats. Properties are created, merged, removed, or updated according to rules you specify.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-importer',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-4.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #15 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: PDF Flyer', 'wp-avalon'),
          'description' => __('Allows the website owner to quickly generate PDF flyers, or brochures, ready for printing or download.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-pdf-flyer',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-17.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #16 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: Power Tools', 'wp-avalon'),
          'description' => __('Extra functionality which includes capability management, white labeling the control panel, and changes menu titles.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-power-tools',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-18.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #17 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: Responsive Slideshow', 'wp-avalon'),
          'description' => __('Allows you to insert a responsive slideshow into any property page with lightbox option', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-responsive-slideshow',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-19.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #18 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: Slideshow', 'wp-avalon'),
          'description' => __('Allows you to insert a slideshow into any property page, home page, or virtually anywhere in your blog.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-slideshow',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-2.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #19 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: Super Map', 'wp-avalon'),
          'description' => __('Lets you put a large interactive map virtually anywhere in your WordPress setup. The map lets your visitors quickly view the location of all your properties, and filter them down by attributes.', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-supermap',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-3.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
        /* widget #20 */
        the_widget('avalon_flip_widget', array(
          'title' => __('WP-Property: Terms', 'wp-avalon'),
          'description' => __('Create any number of additional taxonomies and categorize your listings into search-friendly terms. ', 'wp-avalon'),
          'url' => 'https://www.usabilitydynamics.com/product/wp-property-terms',
          'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-20.png'
        ), array(
          'before_widget' => '',
          'after_widget' => ''
        ));
      endif;
      ?>
    </div>
  </div>
  <?php
endif;
?>