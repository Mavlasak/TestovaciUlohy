<?php

Namespace SlevomatCsobGateway;

require __DIR__ . '/vendor/autoload.php';



var_dump($_POST);

$requestFactory = new RequestFactory('A2702vhEDp');

$bankPublicKeyFile = "banka.txt";

$privateKeyFile = 'rsa_A2702vhEDp.key';

$apiClient = new Api\ApiClient(
	new Api\Driver\CurlDriver(),
	new Crypto\CryptoService(
		$privateKeyFile,
		$bankPublicKeyFile
	),
	'https://iapi.iplatebnibrana.csob.cz/api/v1.6/'
);

$paymentResponse = $requestFactory->createReceivePaymentRequest()->send($apiClient, $_POST);
if ($paymentResponse->getPaymentStatus()->equalsValue(Call\PaymentStatus::S7_AWAITING_SETTLEMENT)) {
	echo 'AHOJ';
}


