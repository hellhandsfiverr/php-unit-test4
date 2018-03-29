<?php
require __DIR__ . "/vendor/autoload.php";

$client = new \AllDigitalRewards\Vendor\Replink\Client;
$client->setUsername('username');
$client->setPassword('password');
$client->setLogger(\AllDigitalRewards\Vendor\Replink\Factory\LoggerFactory::getInstance());

$availableTestProducts = [
    'A5256B44-04F2-4225-BD23-EDFCCC9A8190',
    'B5AC6532-12C6-4BC2-BDB6-59EC04B90435',
    'E89A88B8-F775-4E63-BFB8-D689B6364C99',
    '5F95538C-4017-43CE-847B-E2B44E00167A',
    '28857426-2A2A-4120-9664-D94446BA5AD5'
];
$productA = new \AllDigitalRewards\Vendor\Replink\Entity\ProductRequest;
$productA->setProductID($availableTestProducts[rand(0,4)]);
$productA->setQuantity(1);

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