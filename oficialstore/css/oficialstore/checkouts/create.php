<?php

require 'vendor/autoload.php';

// This is a sample test API key. Sign in to see examples pre-filled with your key.
\Stripe\Stripe::setApiKey('sk_test_51HRnSvC42frmKmcYmtw5UszPkDv00Nn1j5sRzFXiDslPUxLhmG62mrl7vB1ZqvudJJY1sLEdVNI3szYoQ8vdxNuA00yfojJvrg');

header('Content-Type: application/json');


try {
  // retrieve JSON from POST body
  $json_str = file_get_contents('php://input');
  $json_obj = json_decode($json_str);

  $paymentIntent = \Stripe\PaymentIntent::create([
    'amount' => $json_obj->amount * 100,
    'currency' => 'mxn',
  ]);

  $output = [
    'clientSecret' => $paymentIntent->client_secret,
  ];

  echo json_encode($output);
} catch (Error $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}
