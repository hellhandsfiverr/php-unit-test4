<?php
require __DIR__ . "/vendor/autoload.php";

$client = new \AllDigitalRewards\Vendor\Replink\Client;
$client->setUsername('username');
$client->setPassword('password');
$client->setLogger(\AllDigitalRewards\Vendor\Replink\Factory\LoggerFactory::getInstance());

$productA = new \AllDigitalRewards\Vendor\Replink\Entity\ProductRequest;
$productA->setProductID('5C7AE788-4813-4ACB-822E-9932FCD0A6B9');
$productA->setQuantity(1);

$productB = new \AllDigitalRewards\Vendor\Replink\Entity\ProductRequest;
$productB->setProductID('004700E1-CDAB-43EA-A07B-9A1F5E4EBB01');
$productB->setQuantity(1);

$productRequestContainer = [$productA];
$data = [
    'programName' => 'ProgName',
    'customerName' => 'Zech Walden',
    'resellerOrderNumber' => 'PO-123' . time(),
    'billToCompanyName' => 'All Digital Rewards',
    'shipToName' => 'Zech Walden',
    'shipToAddress1' => '12886 Montana Rd',
    'shipToAddress2' => '',
    'shipToCity' => 'Gravois Mills',
    'shipToState' => 'MO',
    'shipToZip' => '65037',
    'shipToPhone' => '8664157703',
    'shipToEmail' => 'zech@alldigitalrewards.com',
    'orderDate' => date('c', strtotime('-1 day')), // Date of transaction
    'requestShipDate' => date('c')
];

$orderRequest = new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest($data);
$response = $client->addOrder($orderRequest, $productRequestContainer);

print_r($response);
//print_r($client->getErrors());