<?php
// webhook.php
//
// Use this sample code to handle webhook events in your integration.
//
// 1) Paste this code into a new file (webhook.php)
//
// 2) Install dependencies
//   composer require stripe/stripe-php
//
// 3) Run the server on http://localhost:4242
//   php -S localhost:4242

require 'vendor/autoload.php';

// The library needs to be configured with your account's secret key.
// Ensure the key is kept out of any version control system you might be using.
$stripe = new \Stripe\StripeClient('sk_test_51Nxa8nLcbdChabAXJaObPETZxs5swOZt0tOhQxUSmZWm72Z9bXmMn6nkeprYGTmYMjAfUHLw8xaDD2HHfD9Yzfhm00NZT1e5gM');

// This is your Stripe CLI webhook secret for testing your endpoint locally.
$endpoint_secret = 'whsec_73da5750bc6914f89c213caf1f67bc219012d9fa984e1d06d76e068eb67aa4f8';

$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
$event = null;

try {
  $event = \Stripe\Webhook::constructEvent(
    $payload, $sig_header, $endpoint_secret
  );
} catch(\UnexpectedValueException $e) {
  // Invalid payload
  http_response_code(400);
  exit();
} catch(\Stripe\Exception\SignatureVerificationException $e) {
  // Invalid signature
  http_response_code(400);
  exit();
}

// Handle the event
switch ($event->type) {
  case 'checkout.session.completed':
    $checkout = $event->data->object;
    
    
        
    $nombreArchivo = "payloadStripe.json"; // Nombre del archivo en el que deseas guardar el contenido
    
    // Guardar el contenido en el archivo
    if (file_put_contents($nombreArchivo, $checkout) !== false) {
        echo "El contenido se ha guardado exitosamente en $nombreArchivo.";
    } else {
        echo "Ha ocurrido un error al guardar el contenido en el archivo.";
    }
    
    
  // ... handle other event types
  default:
    echo 'Received unknown event type ' . $event->type;
}

http_response_code(200);