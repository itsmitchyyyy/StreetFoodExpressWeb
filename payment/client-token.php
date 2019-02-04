<?php

require '../vendor/autoload.php';

$gateway = new Braintree_Gateway([
	'environment' => 'sandbox',
	'merchantId' => '7w4c829h776sbwjg',
	'publicKey' => '4jwd456t42v5jgv9',
	'privateKey' => '935ea70798086c1004f23b88ec727166'
]);

echo($clientToken = $gateway->clientToken()->generate());