<?php

use PHPUnit\Framework\TestCase;

class OrderRequestTest extends TestCase
{
    /** @var \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest */
    private $orderRequest;

    public function testProgramIDSetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setProgramID('123ABC');
        $this->assertSame('123ABC', $orderRequest->getProgramID());

        // ProgramID is a string, so 123 becomes '123'
        $orderRequest->setProgramID(123);
        $this->assertSame('123', $orderRequest->getProgramID());
    }

    public function testProgramNameSetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setProgramName('123ABC');
        $this->assertSame('123ABC', $orderRequest->getProgramName());

        // ProgramID is a string, so 123 becomes '123'
        $orderRequest->setProgramName(123);
        $this->assertSame('123', $orderRequest->getProgramName());
    }

    public function testCustomerNameSetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setCustomerName('John Smith');
        $this->assertSame('John Smith', $orderRequest->getCustomerName());
    }

    public function testResellerOrderNumberSetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setResellerOrderNumber('PO123');
        $this->assertSame('PO123', $orderRequest->getResellerOrderNumber());

        $orderRequest->setResellerOrderNumber(123);
        $this->assertSame('123', $orderRequest->getResellerOrderNumber());
    }

    public function testBillToCompanyNameSetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setBillToCompanyName('ADR');
        $this->assertSame('ADR', $orderRequest->getBillToCompanyName());
    }

    public function testDefaultShipToParticipantID()
    {
        $orderRequest = $this->getOrderRequest();

        $this->assertSame('00000000-0000-0000-0000-000000000000', $orderRequest->getShipToParticipantID());
    }

    public function testShipToNameSetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setShipToName('John Smith');
        $this->assertSame('John Smith', $orderRequest->getShipToName());
    }

    public function testShipToAddress1SetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setShipToAddress1('123 Acme St');
        $this->assertSame('123 Acme St', $orderRequest->getShipToAddress1());
    }

    public function testShipToAddress2SetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setShipToAddress2('Suite #3');
        $this->assertSame('Suite #3', $orderRequest->getShipToAddress2());
    }

    public function testShipToCitySetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setShipToCity('Beverly Hills');
        $this->assertSame('Beverly Hills', $orderRequest->getShipToCity());
    }

    public function testShipToZipSetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setShipToZip('90210');
        $this->assertSame('90210', $orderRequest->getShipToZip());

        $orderRequest->setShipToZip(90210);
        $this->assertSame('90210', $orderRequest->getShipToZip());
    }

    public function testShipToEmailSetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setShipToEmail('zech@alldigitalrewards.com');
        $this->assertSame('zech@alldigitalrewards.com', $orderRequest->getShipToEmail());
    }

    public function testShipToPhoneSetterAndGetter()
    {
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setShipToPhone('1231231234');
        $this->assertSame('1231231234', $orderRequest->getShipToPhone());

        $orderRequest->setShipToPhone(1231231234);
        $this->assertSame('1231231234', $orderRequest->getShipToPhone());
    }

    public function testOrderDateSetterAndGetter()
    {
        $date = date('c');
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setOrderDate($date);
        $this->assertSame($date, $orderRequest->getOrderDate());
    }

    public function testProductsSetterAndGetter()
    {
        $product = new \AllDigitalRewards\Vendor\Replink\Entity\ProductRequest;
        $orderRequest = $this->getOrderRequest();
        $orderRequest->setProducts([$product]);
        $this->assertSame($product, $orderRequest->getProducts()[0]);
    }

    public function getOrderRequest()
    {
        if($this->orderRequest === null) {
            $this->orderRequest = new \AllDigitalRewards\Vendor\Replink\Entity\OrderRequest;
        }

        return $this->orderRequest;
    }
}
