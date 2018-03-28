<?php

use PHPUnit\Framework\TestCase;

class ClientUnitTest extends TestCase
{
    public function testUsernameSetterAndGetter()
    {
        $client = $this->getClient();
        $client->setUsername('johnsmithco');
        $this->assertSame('johnsmithco', $client->getUsername());
    }

    public function testPasswordSetterAndGetter()
    {
        $client = $this->getClient();
        $client->setPassword('batman');
        $this->assertSame('batman', $client->getPassword());
    }

    public function testLoggerSetterAndGetter()
    {
        $logger = \AllDigitalRewards\Vendor\Replink\Factory\LoggerFactory::getInstance();
        $client = $this->getClient();
        $client->setLogger($logger);

        $this->assertSame($client->getLogger(), \AllDigitalRewards\Vendor\Replink\Factory\LoggerFactory::getInstance());
    }

    public function testSoapClientGetterAndSetter()
    {
        $client = $this->getClient();
        $client->setUsername('test');
        $client->setPassword('test');

        $this->assertInstanceOf(\AllDigitalRewards\Vendor\Replink\SoapClient::class, $client->getSoapClient());
    }


    private function getClient()
    {
        return new \AllDigitalRewards\Vendor\Replink\Client();
    }
}
