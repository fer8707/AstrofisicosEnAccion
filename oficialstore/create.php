<?php

require 'vendor/autoload.php';

// This is a sample test API key. Sign in to see examples pre-filled with your key.
\Stripe\Stripe::setApiKey('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');

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
