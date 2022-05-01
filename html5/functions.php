<?php
wp_enqueue_style('normalize', get_template_directory_uri() . '/node_modules/normalize.css/normalize.css');

wp_enqueue_style('font-awesome', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.css');

wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

wp_register_script('script', get_template_directory_uri() . '/js/main.js');
wp_enqueue_script('script');

function add_subscriber()
{
  require 'mailchimp.php';
}

function contact_send()
{
  require 'contact.php';
}

add_action('rest_api_init', function () {
  register_rest_route('v1', '/subscribe', array(
    'methods' => 'POST',
    'callback' => 'add_subscriber',
  ));
});

add_action('rest_api_init', function () {
  register_rest_route('v1', '/contact', array(
    'methods' => 'POST',
    'callback' => 'contact_send',
  ));
});

function reiser_home($wp_customize)
{
  $wp_customize->add_section('reiser-home-section', array(
    'title' => 'Reiser - Home'
  ));

  //  BANNER
  $wp_customize->add_setting('reiser-home-banner-headline', array(
    'default' => 'Our Call to Serve'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-banner-headline-control', array(
    'label' => 'Banner Headline',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-banner-headline'
  )));

  $wp_customize->add_setting('reiser-home-banner-text', array(
    'default' => 'Since 1996, Reiser Relief has been providing relief, hope, and dignity to the poor, elderly, and homeless people of Haiti.'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-banner-text-control', array(
    'label' => 'Banner Text',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-banner-text'
  )));

  $wp_customize->add_setting('reiser-home-banner-button-text', array(
    'default' => 'Give Today'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-banner-button-text-control', array(
    'label' => 'Banner Button Text',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-banner-button-text'
  )));

  $wp_customize->add_setting('reiser-home-banner-image');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-home-banner-image-control', array(
    'label' => 'Banner Image',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-banner-image',
    'width' => 2048,
    'height' => 1042
  )));

  //  INFO BLOCK 1

  $wp_customize->add_setting('reiser-home-info-block-1-title', array(
    'default' => 'Core Values'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-info-block-1-title-control', array(
    'label' => 'Info Block 1 Title',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-1-title'
  )));

  $wp_customize->add_setting('reiser-home-info-block-1-image');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-home-info-block-1-image-control', array(
    'label' => 'Info Block 1 Image',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-1-image',
    'width' => 520,
    'height' => 347
  )));

  $wp_customize->add_setting('reiser-home-info-block-1-text', array(
    'default' => 'Since our founding, the organization has grown to support four primary schools, three homes for the elderly, one home for disabled adults, one trade school, one water truck ministry, and one university scholarship program.'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-info-block-1-text-control', array(
    'label' => 'Info Block 1 Text',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-1-text'
  )));

  $wp_customize->add_setting('reiser-home-info-block-1-button-text', array(
    'default' => 'Learn More'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-info-block-1-button-text-control', array(
    'label' => 'Info Block 1 Button Text',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-1-button-text'
  )));

  //  INFO BLOCK 2

  $wp_customize->add_setting('reiser-home-info-block-2-title', array(
    'default' => 'Give'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-info-block-2-title-control', array(
    'label' => 'Info Block 2  Title',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-2-title'
  )));

  $wp_customize->add_setting('reiser-home-info-block-2-image');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-home-info-block-2-image-control', array(
    'label' => 'Info Block 2  Image',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-2-image',
    'width' => 520,
    'height' => 347
  )));

  $wp_customize->add_setting('reiser-home-info-block-2-text', array(
    'default' => 'Your donation will provide clean water, food, education and care to the poor in Haiti. Reiser Relief Inc. is a 501(c)(3) ministry. Donations are tax-exempt as allowed by law.'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-info-block-2-text-control', array(
    'label' => 'Info Block 2 Text',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-2-text'
  )));

  $wp_customize->add_setting('reiser-home-info-block-2-button-text', array(
    'default' => 'Donate'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-info-block-2-button-text-control', array(
    'label' => 'Info Block 2  Button Text',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-2-button-text'
  )));

  //  INFO BLOCK 3

  $wp_customize->add_setting('reiser-home-info-block-3-title', array(
    'default' => 'Contact'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-info-block-3-title-control', array(
    'label' => 'Info Block 3  Title',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-3-title'
  )));

  $wp_customize->add_setting('reiser-home-info-block-3-image');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-home-info-block-3-image-control', array(
    'label' => 'Info Block 3  Image',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-3-image',
    'width' => 530,
    'height' => 347
  )));

  $wp_customize->add_setting('reiser-home-info-block-3-text', array(
    'default' => 'We’d love to hear from you. Whether you have questions, comments, suggestions or just want to share your story, please don’t hesitate to contact us.'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-info-block-3-text-control', array(
    'label' => 'Info Block 3 Text',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-3-text'
  )));

  $wp_customize->add_setting('reiser-home-info-block-3-button-text', array(
    'default' => 'Contact Us'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-info-block-3-button-text-control', array(
    'label' => 'Info Block 3 Button Text',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-info-block-3-button-text'
  )));

  //  NEWSLETTER
  $wp_customize->add_setting('reiser-home-newsletter-headline', array(
    'default' => 'Stay in Touch'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-newsletter-headline-control', array(
    'label' => 'Newsletter Headline',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-newsletter-headline'
  )));

  $wp_customize->add_setting('reiser-home-newsletter-text', array(
    'default' => 'Sign up to receive occasional newsletters and updates about upcoming events.'
  ));

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reiser-home-newsletter-text-control', array(
    'label' => 'Newsletter Text',
    'section' => 'reiser-home-section',
    'settings' => 'reiser-home-newsletter-text'
  )));

}

function reiser_about($wp_customize)
{
  $wp_customize->add_section('reiser-about-section', array(
    'title' => 'Reiser - About'
  ));

  //  EDUCATION

  $wp_customize->add_setting('reiser-education-image-1');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-education-image-1-control', array(
    'label' => 'Education 1 Image',
    'section' => 'reiser-about-section',
    'settings' => 'reiser-education-image-1',
    'width' => 520,
    'height' => 347
  )));

  $wp_customize->add_setting('reiser-education-image-2');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-education-image-2-control', array(
    'label' => 'Education 2 Image',
    'section' => 'reiser-about-section',
    'settings' => 'reiser-education-image-2',
    'width' => 520,
    'height' => 347
  )));

  //  CARE
  $wp_customize->add_setting('reiser-care-image-1');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-care-image-1-control', array(
    'label' => 'care 1 Image',
    'section' => 'reiser-about-section',
    'settings' => 'reiser-care-image-1',
    'width' => 520,
    'height' => 347
  )));

  $wp_customize->add_setting('reiser-care-image-2');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-care-image-2-control', array(
    'label' => 'care 2 Image',
    'section' => 'reiser-about-section',
    'settings' => 'reiser-care-image-2',
    'width' => 520,
    'height' => 347
  )));

  //  FOUNDER
  $wp_customize->add_setting('reiser-founder-image-1');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-founder-image-1-control', array(
    'label' => 'founder 1 Image',
    'section' => 'reiser-about-section',
    'settings' => 'reiser-founder-image-1',
    'width' => 520,
    'height' => 347
  )));

  $wp_customize->add_setting('reiser-founder-image-2');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-founder-image-2-control', array(
    'label' => 'founder 2 Image',
    'section' => 'reiser-about-section',
    'settings' => 'reiser-founder-image-2',
    'width' => 520,
    'height' => 347
  )));

  $wp_customize->add_setting('reiser-founder-image-3');

  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'reiser-founder-image-3-control', array(
    'label' => 'founder 3 Image',
    'section' => 'reiser-about-section',
    'settings' => 'reiser-founder-image-3',
    'width' => 520,
    'height' => 347
  )));

}

add_action('customize_register', 'reiser_home');
add_action('customize_register', 'reiser_about');
?>
