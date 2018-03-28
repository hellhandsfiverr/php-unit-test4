<?php

use PHPUnit\Framework\TestCase;

class ClientIntegrationTest extends TestCase
{
    public function testClientAddOrderSuccess()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderSuccess.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertEmpty($client->getErrors());
    }

    public function testClientAddOrderNullZip()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullZip.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullShipToState()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullShipToState.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullShipToPhone()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullShipToPhone.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullShipToName()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullShipToName.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullShipToEmail()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullShipToEmail.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullShipToCity()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullShipToCity.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullShipToAddress1()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullShipToAddress1.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullResellerOrderNumber()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullResellerOrderNumber.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullRequestShipDate()
    {
        try {
            $soapClient = $this->getSoapMock();
            $soapClient->method('__call')
                ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullRequestShipDate.xml'));
        } catch (\Exception $e) {
            $this->assertSame(2, $e->getCode());
        }
    }

    public function testClientAddOrderNullProgram()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullProgram.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullOrderDate()
    {
        try {
            $soapClient = $this->getSoapMock();
            $soapClient->method('__call')
                ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullOrderDate.xml'));
        } catch (\Exception $e) {
            $this->assertSame(2, $e->getCode());
        }
    }

    public function testClientAddOrderNullCustomerName()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullCustomerName.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderNullBillToCompanyName()
    {
        $client = $this->getClient();
        $soapClient = $this->getSoapMock();
        $soapClient->method('__call')
            ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureNullBillToCompanyName.xml'));

        $client->setSoapClient($soapClient);
        $client->addOrder((new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest), []);
        $this->assertNotEmpty($client->getErrors());
    }

    public function testClientAddOrderEmptyProducts()
    {
        try {
            $soapClient = $this->getSoapMock();
            $soapClient->method('__call')
                ->willReturn(simplexml_load_file(__DIR__ . '/../fixtures/addOrderFailureEmptyProducts.xml'));
        } catch (\Exception $e) {
            $this->assertSame(2, $e->getCode());
        }
    }

    private function getClient()
    {
        return new \AllDigitalRewards\Vendor\Replink\Client();
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|\AllDigitalRewards\Vendor\Replink\SoapClient
     */
    private function getSoapMock()
    {
        $soapClient = $this->getMockBuilder(\AllDigitalRewards\Vendor\Replink\SoapClient::class)
            ->disableOriginalConstructor()
            ->getMock();

        return $soapClient;
    }
}
