# Replink Vendor SDK

This is the AllDigitalRewards Replink Vendor SDK. This tool is used 
for adding orders to the supplier Replink.

Other methods will be added at a later date (order lookup, shipping lookup)

## Install

Via Composer

``` bash
composer config repositories.replink-vendor-sdk vcs git@bitbucket.org:alldigitalrewards/replink-vendor-sdk.git
composer require alldigitalrewards/replink-vendor-sdk
```

## Usage
### Getting started
``` php
<?php
require __DIR__ . '/vendor/autoload.php';

# Connect
$client = new \AllDigitalRewards\Vendor\Replink\Client;
$client->setUsername($replinkUserId);
$client->setPassword($replinkDevKey);

Optionally, you can specify a PSR3 compatible logger. If a logger is specified, 
order failures & successes will be recorded 
$client->setLogger(\AllDigitalRewards\Vendor\Replink\Factory\LoggerFactory::getInstance());
```

#### Examples
##### Submit an order
```
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
```