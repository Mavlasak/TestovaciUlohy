<?php

//declare(strict_types = 1);

Namespace SlevomatCsobGateway;

require __DIR__ . '/vendor/autoload.php';


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

$requestFactory = new RequestFactory('A2702vhEDp');

// cart has to have at least 1 but most of 2 items
$cart = new Cart(new Currency(Currency::EUR));
//$cart = new Cart(Currency::get(Currency::EUR));

$cart->addItem('Nakup', 1, 1.9 * 100);

$paymentResponse = $requestFactory->createInitPayment(
	123,
        new Call\PayOperation(Call\PayOperation::PAYMENT),
	new Call\PayMethod(Call\PayMethod::CARD),
	true,
	'http://localhost/TestovaciUkoly/Ukol4/start2.php',
	new Api\HttpMethod(Api\HttpMethod::POST),
	$cart,
        'popis',
        null,
        null,
        new Language(Language::CZ)     
)->send($apiClient);

$payId = $paymentResponse->getPayId();

$processPaymentResponse = $requestFactory->createProcessPayment($payId)->send($apiClient);

// redirect to gateway
header('Location: ' . $processPaymentResponse->getGatewayLocationUrl());

