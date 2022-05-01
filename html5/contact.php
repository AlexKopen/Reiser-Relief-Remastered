<?php
try {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["name"] . "\r\n" . $_POST["message"];

  $to = "alexkopen@gmail.com";
  $headers = "From: " . $email . "\r\n";

  mail($to, $subject, $message, $headers);

  $object = (object)['message' => 'success'];
  http_response_code(200);
  echo json_encode($object);
} catch (Exception $e) {
  http_response_code(400);
  echo json_encode($e->getMessage());
}
