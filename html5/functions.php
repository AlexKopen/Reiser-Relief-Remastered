<?php
wp_enqueue_style('normalize', get_template_directory_uri() . '/node_modules/normalize.css/normalize.css');

wp_enqueue_style('font-awesome', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.css');

wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

wp_register_script('script', get_template_directory_uri() . '/js/main.js');
wp_enqueue_script('script');

function add_subscriber() {
  require 'mailchimp.php';
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'v1', '/subscribe', array(
    'methods' => 'POST',
    'callback' => 'add_subscriber',
  ) );
} );

// Add Footer callout section to admin appearance customize screen
function lwp_footer_callout($wp_customize) {
  $wp_customize->add_section('lwp-footer-callout-section', array(
    'title' => 'Footer Callout'
  ));

  $wp_customize->add_setting('lwp-footer-callout-headline', array(
    'default' => 'Example Headline Text!'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-headline-control', array(
    'label' => 'Headline',
    'section' => 'lwp-footer-callout-section',
    'settings' => 'lwp-footer-callout-headline'
  )));



  $wp_customize->add_setting('lwp-footer-callout-text', array(
    'default' => 'Since 1996, Reiser Relief has been providing relief, hope, and dignity to the poor, elderly, and homeless people of Haiti.'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lwp-footer-callout-text-control', array(
    'label' => 'Text',
    'section' => 'lwp-footer-callout-section',
    'settings' => 'lwp-footer-callout-text'
  )));

  $wp_customize->add_setting('lwp-footer-callout-image');

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lwp-footer-callout-image-control', array(
    'label' => 'Image',
    'section' => 'lwp-footer-callout-section',
    'settings' => 'lwp-footer-callout-image',
    'width' => 750,
    'height' => 500
  )));


}

add_action('customize_register', 'lwp_footer_callout');
?>
