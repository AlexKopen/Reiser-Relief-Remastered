<?php

use \Mailjet\Resources;

require 'vendor/autoload.php';

try {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = "Name: " . $name . "\r\n" . "Email: " . $email . "\r\n" . "Message: " . $_POST["message"];

  $to = "alexkopen@gmail.com";

  $mj = new \Mailjet\Client('23521b93e7ec51568fe394781b42c924', '7974991dcb6cd929980a9e34a48b63cc', true, ['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "info@reiserrelief.org",
          'Name' => "Reiser Relief Contact"
        ],
        'To' => [
          [
            'Email' => $to,
            'Name' => "Alex"
          ]
        ],
        'Subject' => $subject,
        'TextPart' => $message,
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());


  $object = (object)['message' => 'success'];
  http_response_code(200);
  echo json_encode($response->getData());
} catch (Exception $e) {
  http_response_code(400);
  echo json_encode($e->getMessage());
}
