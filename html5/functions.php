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

?>
