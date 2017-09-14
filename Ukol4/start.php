<?php  
Namespace SlevomatCsobGateway;
error_reporting(0);
require __DIR__ . '/vendor/autoload.php';
?>

<form action="start.php" method="POST">
    Zadej castku:
    <input type="text" name="castka" />
    Zadej text:
    <input type="text" name="text" />
    <input type="submit" />
</form>
  Oboje musi byt zadano!!!
<?php
if (!(($_POST['castka'])!='' && is_numeric($_POST['castka']) && ($_POST['castka'])>0 && ($_POST['text'])!=''))
exit;
    
$bankPublicKeyFile = "banka.txt";

$privateKeyFile = 'rsa_A2702vhEDp.key';

$apiClient = new Api\ApiClient(
        new Api\Driver\CurlDriver(), new Crypto\CryptoService(
        $privateKeyFile, $bankPublicKeyFile
        ), 'https://iapi.iplatebnibrana.csob.cz/api/v1.6/'
);

$requestFactory = new RequestFactory('A2702vhEDp');

// cart has to have at least 1 but most of 2 items
$cart = new Cart(new Currency(Currency::EUR));
//$cart = new Cart(Currency::get(Currency::EUR));

$cart->addItem('Nakup', 1, $_POST['castka'] * 100);

$paymentResponse = $requestFactory->createInitPayment(
                123, new Call\PayOperation(Call\PayOperation::PAYMENT), new Call\PayMethod(Call\PayMethod::CARD), true, 'http://localhost/TestovaciUkoly/Ukol4/start2.php', new Api\HttpMethod(Api\HttpMethod::POST), $cart, ''.($_POST['text']).'', null, null, new Language(Language::CZ)
        )->send($apiClient);

$payId = $paymentResponse->getPayId();

$processPaymentResponse = $requestFactory->createProcessPayment($payId)->send($apiClient);

// redirect to gateway
header('Location: ' . $processPaymentResponse->getGatewayLocationUrl());

