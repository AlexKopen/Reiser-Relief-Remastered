<?php
require_once 'vendor/autoload.php';

$client = new MailchimpMarketing\ApiClient();
$client->setConfig([
  'apiKey' => 'c6beb1d0a9eb47540354e2fac2b5b2a2-us14',
  'server' => 'us14',
]);

try {
  $firstName = $_POST["fname"];
  $lastName = $_POST["lname"];
  $email = $_POST["email"];

  $response = $client->lists->addListMember("3d54ca06de", [
    "email_address" => $email,
    "status" => "subscribed",
    "merge_fields" => [
      "FNAME" => $firstName,
      "LNAME" => $lastName,
    ]
  ]);

  http_response_code(200);
  echo json_encode($response);
} catch (Exception $e) {
  http_response_code(500);
  echo json_encode($e->getMessage());
}
