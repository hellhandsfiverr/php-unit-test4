<?php

use PHPUnit\Framework\TestCase;

class OrderResponseTest extends TestCase
{
    /** @var \AllDigitalRewards\Vendor\Replink\Entity\OrderResponse */
    private $orderResponse;

    public function testOrderIdSetterAndGetter()
    {
        $orderResponse = $this->getOrderResponse();
        $orderResponse->setOrderID('ABC123');
        $this->assertSame('ABC123', $orderResponse->getOrderID());
    }

    public function testOrderNumberSetterAndGetter()
    {
        $orderResponse = $this->getOrderResponse();
        $orderResponse->setOrderNumber('ABC123');
        $this->assertSame('ABC123', $orderResponse->getOrderNumber());
    }

    public function getOrderResponse()
    {
        if($this->orderResponse === null) {
            $this->orderResponse = new \AllDigitalRewards\Vendor\Replink\Entity\OrderResponse();
        }

        return $this->orderResponse;
    }
}
