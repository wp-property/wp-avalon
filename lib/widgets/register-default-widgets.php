<?php

add_action('after_switch_theme', function() {

  $avalon_frontpage_sidebars = array(
      'sidebar-headlights' => 'sidebar-headlights',
      'sidebar-avalon-features' => 'sidebar-avalon-features',
      'sidebar-property-description' => 'sidebar-property-description',
      'sidebar-avalon-overview' => 'sidebar-avalon-overview',
      'sidebar-property-addons' => 'sidebar-property-addons',
  );

  $active_widgets = get_option('sidebars_widgets');

  /**
   * Default Headlights widgets
   */
  if (empty($active_widgets[$avalon_frontpage_sidebars['sidebar-headlights']])):

    $avalon_counter = 1;

    /* widget #1 */
    $active_widgets['sidebar-headlights'][0] = 'avalon-headlight-widget-' . $avalon_counter;
    $headlight_widget_content[$avalon_counter] = array(
        'title' => 'WP-Property: Walk Score',
        'text' => 'Adds Walk Score\'s and Neighborhood Map\'s Widgets and Shortcodes to your Site powered by WP-Property plugin. And allows to sort and search your listings by Walk Score.',
        'link' => 'https://www.usabilitydynamics.com/product/wp-property-walkscore',
        'price' => '$35.00',
        'more_label' => 'More details',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-1.png'
    );
    update_option('widget_avalon-headlight-widget', $headlight_widget_content);
    $avalon_counter++;

    /* widget #2 */
    $active_widgets['sidebar-headlights'][] = 'avalon-headlight-widget-' . $avalon_counter;
    $headlight_widget_content[$avalon_counter] = array(
        'title' => 'WP-Property: Slideshow',
        'text' => 'Allows you to insert a slideshow into any property page, home page, or virtually anywhere in your blog.',
        'link' => 'https://www.usabilitydynamics.com/product/wp-property-slideshow',
        'price' => '$50.00',
        'more_label' => 'More details',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-2.png'
    );
    update_option('widget_avalon-headlight-widget', $headlight_widget_content);
    $avalon_counter++;

    /* widget #3 */
    $active_widgets['sidebar-headlights'][] = 'avalon-headlight-widget-' . $avalon_counter;
    $headlight_widget_content[$avalon_counter] = array(
        'title' => 'WP-Property: Super Map',
        'text' => 'Lets you put a large interactive map virtually anywhere in your WordPress setup. The map lets your visitors quickly view the location of all your properties, and filter them down by attributes.',
        'link' => 'https://www.usabilitydynamics.com/product/wp-property-supermap',
        'price' => '$50.00',
        'more_label' => 'More details',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-3.png'
    );
    update_option('widget_avalon-headlight-widget', $headlight_widget_content);
    $avalon_counter++;

    /* widget #4 */
    $active_widgets['sidebar-headlights'][] = 'avalon-headlight-widget-' . $avalon_counter;
    $headlight_widget_content[$avalon_counter] = array(
        'title' => 'WP-Property: Importer',
        'text' => 'The XMLI Importer enables you to automatically import property listings directly into your website. This includes MLS, RETS, XML, CSV formats. Properties are created, merged, removed, or updated according to rules you specify.',
        'link' => 'https://www.usabilitydynamics.com/product/wp-property-importer',
        'price' => '$175.00',
        'more_label' => 'More details',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-4.png'
    );
    update_option('widget_avalon-headlight-widget', $headlight_widget_content);
    $avalon_counter++;

    update_option('sidebars_widgets', $active_widgets);

  endif;

  if (empty($active_widgets[$avalon_frontpage_sidebars['sidebar-avalon-features']])):
    $avalon_counter = 1;
    $active_widgets['sidebar-avalon-features'][0] = 'avalon-fetaures-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP Avalon. Free WordPress theme', 'wp-avalon'),
        'text' => __('We designed our Avalon WordPress theme especially for WP-Property plugin. It has responsive style layouts so that it can be displayed nicely in any device, desktop or mobile. Customizable sidabars and defferent widgets to suit every taste. All colors from the site are also customizable to to fit your brand\'s colors.', 'wp-avalon'),
        'featured-left-fields' => array(
            '0' => __('It is Free!!!!', 'wp-avalon'),
            '1' => __('Grid overview template', 'wp-avalon'),
            '2' => __('Let\'s you upload a custom logo', 'wp-avalon'),
            '3' => __('Add your contact and company information', 'wp-avalon'),
            '4' => __('Available for localization', 'wp-avalon'),
        ),
        'featured-right-fields' => array(
            '0' => __('Compatible with WP-Property pluigin and all it\'s add-ons', 'wp-avalon'),
            '1' => __('Useful Sidebars and widgets available', 'wp-avalon'),
            '2' => __('Adjust the theme to fit your brand\'s colors', 'wp-avalon'),
            '3' => __('Fully Responsive', 'wp-avalon'),
            '4' => __('Basic free support included', 'wp-avalon'),
        ),
    );
    update_option('widget_avalon-fetaures-widget', $overview_widget_content);
    $avalon_counter++;
    update_option('sidebars_widgets', $active_widgets);

  endif;

  if (empty($active_widgets[$avalon_frontpage_sidebars['sidebar-property-description']])):
    $avalon_counter = 2;
    $active_widgets['sidebar-property-description'][0] = 'avalon-fetaures-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('About WP Property. Free WordPress plugin', 'wp-avalon'),
        'text' => __('More than a Plugin – A Real Estate Management System! Dynamic Property Listings – No Coding Required! Unparalleled Flexibility – List ANY Product or Service!<br /><br /><strong>Other WP-Property Features</strong>', 'wp-avalon'),
        'featured-left-fields' => array(
            '0' => __('Any amount of custom attributes (fields) and property types.', 'wp-avalon'),
            '1' => __('Free and Paid Add-ons and Themes available.', 'wp-avalon'),
            '2' => __('Property types follow a hierarchical format, having the ability of inheriting settings - i.e. buildings (or communities) will automatically calculate the price range of all floor-plans below them.', 'wp-avalon'),
            '3' => __('Available for translation.', 'wp-avalon'),
            '4' => __('SEO friendly URLs generated for every property, following the WordPress format.', 'wp-avalon'),
            '5' => __('Integrates with Media Library, avoiding the need for additional third-party Gallery plugins.', 'wp-avalon'),
        ),
        'featured-right-fields' => array(
            '0' => __('Different attributes fields inputs are available: Text Editor, Dropdown Selection, Single Checkbox, Multi-checkbox, Radio, Number, Currency, Oembed, File and Image Upload, URL, Date and Color Pickers, etc.', 'wp-avalon'),
            '1' => __('Customizable widgets: Property Overview, Featured Properties, Property Search, Property Gallery, Child Properties, Property Terms, Property Meta', 'wp-avalon'),
            '2' => __('Pagination and sorting works on search results.', 'wp-avalon'),
            '3' => __('Customizable templates for different property types.', 'wp-avalon'),
            '4' => __('Google Maps API to automatically validate physical addresses behind-the-scenes.', 'wp-avalon'),
        ),
    );
    update_option('widget_avalon-fetaures-widget', $overview_widget_content);
    $avalon_counter++;
    update_option('sidebars_widgets', $active_widgets);

  endif;

  if (empty($active_widgets[$avalon_frontpage_sidebars['sidebar-avalon-overview']])):

    $avalon_counter = 1;

    /* widget #1 */
    $active_widgets['sidebar-avalon-overview'][0] = 'avalon-property-overview-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('250 S Estes Drive 52', 'wp-avalon'),
        'location' => 'Chapel Hill,  North Carolina',
        'beds' => '1',
        'baths' => '2',
        'price' => '$79,500',
        'link' => '#',
        'image_uri' => get_template_directory_uri() . '/static/images/property_default_image_1.jpeg'
    );
    update_option('widget_avalon-property-overview-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #2 */
    $active_widgets['sidebar-avalon-overview'][] = 'avalon-property-overview-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('2412 Environ Way 2412', 'wp-avalon'),
        'location' => 'Chapel Hill,  North Carolina',
        'beds' => '3',
        'baths' => '2',
        'price' => '$475.000',
        'link' => '#',
        'image_uri' => get_template_directory_uri() . '/static/images/property_default_image_2.jpeg'
    );
    update_option('widget_avalon-property-overview-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #3 */
    $active_widgets['sidebar-avalon-overview'][] = 'avalon-property-overview-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('5500 Fortunes Ridge Drive 78b', 'wp-avalon'),
        'location' => 'Durham,  North Carolina',
        'beds' => '1',
        'baths' => '1',
        'price' => '$122.000',
        'link' => '#',
        'image_uri' => get_template_directory_uri() . '/static/images/property_default_image_3.jpeg'
    );
    update_option('widget_avalon-property-overview-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #4 */
    $active_widgets['sidebar-avalon-overview'][] = 'avalon-property-overview-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('424 E Rose Street', 'wp-avalon'),
        'location' => 'Smithfield,  North Carolina',
        'beds' => '3',
        'baths' => '1',
        'price' => '$99.000',
        'link' => '#',
        'image_uri' => get_template_directory_uri() . '/static/images/property_default_image_4.jpeg'
    );
    update_option('widget_avalon-property-overview-widget', $overview_widget_content);
    $avalon_counter++;

    update_option('sidebars_widgets', $active_widgets);

  endif;

  if (empty($active_widgets[$avalon_frontpage_sidebars['sidebar-property-addons']])):

    $avalon_counter = 1;

    /* widget #1 */
    $active_widgets['sidebar-property-addons'][0] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: Walk Score', 'wp-avalon'),
        'description' => __('Adds Walk Score\'s and Neighborhood Map\'s Widgets and Shortcodes to your Site powered by WP-Property plugin. And allows to sort and search your listings by Walk Score.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-walkscore',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-1.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #2 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-CRM: Group Messages', 'wp-avalon'),
        'description' => __('Send group messages to your users from within your WordPress control panel.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-crm-group-messages',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-5.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #3 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Invoice: Business Locations', 'wp-avalon'),
        'description' => __('Free Add-on to manage locations for your business built with WP-Invoice plugin.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-business-locations',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-6.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #4 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Invoice: Electronic Signature', 'wp-avalon'),
        'description' => __('Make your clients sign invoices before payment to get secure information that will confirm payment.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-electronic-signature',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-7.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #5 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Invoice: Paypal Pro', 'wp-avalon'),
        'description' => __('PayPal Payments Pro has the customization capability, technical maturity, and proven security that is needed to build professional-grade eCommerce sites.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-paypal-pro',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-8.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #6 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Invoice: PDF', 'wp-avalon'),
        'description' => __('Creates PDF versions of your invoices, receipts and that you can easily email and print.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-pdf',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-9.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #7 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Invoice: Power Tools', 'wp-avalon'),
        'description' => __('Make you invoicing solutions more powerful with WP-Invoice and Power Tools. Sales charts, import and export ability!', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-power-tools',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-10.jpg'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #8 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Invoice: Quotes', 'wp-avalon'),
        'description' => __('The Quotes Add-on let’s you automate your workflow by creating quotes and letting your clients ask questions regarding quotes directly on your website. Once a quote is approved, it is converted to an invoice with a single click.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-quotes',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-11.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #9 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Invoice: Single Page Checkout', 'wp-avalon'),
        'description' => __('Makes it easy to create one-page-checkout forms that can accept a variety of different payment gateways, such as Authorize.net, PayPal and others.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-single-page-checkout',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-12.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #10 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Invoice: USAePay', 'wp-avalon'),
        'description' => __('USAePay is a payment gateway service provider allowing merchants to accept credit card and electronic check payments through their Web site and mobile devices.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-invoice-usa-epay',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-13.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #11 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: Agents', 'wp-avalon'),
        'description' => __('Allows to create new Real Estate agent accounts, associate them with properties, filter properties by agent and more.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-agents',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-14.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #12 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: Facebook Tabs', 'wp-avalon'),
        'description' => __('The Add-on allows you to add a tab with property listings or any other content from your website, on a Facebook Page.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-facebook-tabs',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-15.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #13 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: FEPS', 'wp-avalon'),
        'description' => __('Allows to create front-end forms that facilitate a simple way for website visitors to submit, edit and delete listings from frontend. Listings can be submitted for free or you can use Sponsored Listings option.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-feps',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-16.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #14 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: Importer', 'wp-avalon'),
        'description' => __('The XMLI Importer enables you to automatically import property listings directly into your website. This includes MLS, RETS, XML, CSV formats. Properties are created, merged, removed, or updated according to rules you specify.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-importer',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-4.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #15 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: PDF Flyer', 'wp-avalon'),
        'description' => __('Allows the website owner to quickly generate PDF flyers, or brochures, ready for printing or download.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-pdf-flyer',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-17.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #16 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: Power Tools', 'wp-avalon'),
        'description' => __('Extra functionality which includes capability management, white labeling the control panel, and changes menu titles.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-power-tools',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-18.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #17 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: Responsive Slideshow', 'wp-avalon'),
        'description' => __('Allows you to insert a responsive slideshow into any property page with lightbox option', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-responsive-slideshow',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-19.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #18 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: Slideshow', 'wp-avalon'),
        'description' => __('Allows you to insert a slideshow into any property page, home page, or virtually anywhere in your blog.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-slideshow',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-2.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #19 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: Super Map', 'wp-avalon'),
        'description' => __('Lets you put a large interactive map virtually anywhere in your WordPress setup. The map lets your visitors quickly view the location of all your properties, and filter them down by attributes.', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-supermap',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-3.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    /* widget #20 */
    $active_widgets['sidebar-property-addons'][] = 'avalon-property-addons-widget-' . $avalon_counter;
    $overview_widget_content[$avalon_counter] = array(
        'title' => __('WP-Property: Terms', 'wp-avalon'),
        'description' => __('Create any number of additional taxonomies and categorize your listings into search-friendly terms. ', 'wp-avalon'),
        'url' => 'https://www.usabilitydynamics.com/product/wp-property-terms',
        'image_uri' => get_template_directory_uri() . '/static/images/fhb__image-20.png'
    );
    update_option('widget_avalon-property-addons-widget', $overview_widget_content);
    $avalon_counter++;

    update_option('sidebars_widgets', $active_widgets);

  endif;
});

