<?php
require 'vendor/autoload.php';

$stripe = new \Stripe\StripeClient('sk_test_Tnuzac8zTEPGSxziKqAWyvUc');


$customer = $stripe->customers->create(
  [
    'email' => 'alexkopen@gmail.bro',
    'name' => 'adog',
    'address' => [
      'city' => 'Brothers',
      'country' => 'US',
      'line1' => '27 Fredrick Ave',
      'postal_code' => '97712',
      'state' => 'CA',
    ],
  ]
);

$customer_id = $customer['id'];
$price_id = 'plan_FbHMS1nsWfR7cR';

$paymentIntent = $stripe->paymentIntents->create([
  'payment_method_types' => ['us_bank_account'],
//  'payment_method_types' => ["card"],
  'customer' => $customer_id,
  'amount' => 100,
  'currency' => 'usd'
]);

$subscription = $stripe->subscriptions->create([
  'customer' => $customer_id,
  'items' => [[
    'price' => $price_id,
    'quantity' => 20
  ]],
  'payment_behavior' => 'default_incomplete',
  'expand' => ['latest_invoice.payment_intent'],
]);

$object = (object)['secret' => $paymentIntent['client_secret']];

http_response_code(200);
echo json_encode($object);
