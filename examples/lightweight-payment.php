<?php

require __DIR__ . '/../vendor/autoload.php';

// Set these to your actual endpoint and API key
$endpoint = getenv('GINGER_ENDPOINT');
$apiKey = getenv('GINGER_API_KEY');

// Get our client
$client = \Ginger\Ginger::createClient($endpoint, $apiKey);

// Create our order without specifying a payment method
$order = $client->createOrder(
    [
        'amount' => 250, // Amount in cents
        'currency' => 'EUR'
    ]
);

// Show the payment URL which we should redirect the user to
echo "Payment URL: " . $order['transactions'][0]['payment_url'] . "\n";
