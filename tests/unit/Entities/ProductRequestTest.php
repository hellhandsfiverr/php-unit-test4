<?php

use PHPUnit\Framework\TestCase;

class ProductRequestTest extends TestCase
{
    /** @var \AllDigitalRewards\Vendor\Replink\Entity\ProductRequest */
    private $productRequest;

    public function testProgramIDSetterAndGetter()
    {
        $productRequest = $this->getProductRequest();
        $productRequest->setProductID('ABC123');
        $this->assertSame('ABC123', $productRequest->getProductID());

        $productRequest->setProductID(123);
        $this->assertSame('123', $productRequest->getProductID());
    }

    public function testOpThirdPartyShippingSetterAndGetter()
    {
        $productRequest = $this->getProductRequest();
        $this->assertSame(0, $productRequest->getOPThirdPartyShipping());
        $this->assertFalse($productRequest->isOPThirdPartyShipping());

        $productRequest->setOPThirdPartyShipping(1);
        $this->assertSame(1, $productRequest->getOPThirdPartyShipping());
        $this->assertTrue($productRequest->isOPThirdPartyShipping());
    }

    public function testQuantitySetterAndGetter()
    {
        $productRequest = $this->getProductRequest();
        $productRequest->setQuantity(1);
        $this->assertSame(1, $productRequest->getQuantity());

        $productRequest->setQuantity('1');
        $this->assertSame(1, $productRequest->getQuantity());
    }

    public function testDefaultOrderId()
    {
        $productRequest = $this->getProductRequest();

        $this->assertSame('00000000-0000-0000-0000-000000000000', $productRequest->getOrderId());
    }

    public function testDefaultProductOptionId()
    {
        $productRequest = $this->getProductRequest();

        $this->assertSame('00000000-0000-0000-0000-000000000000', $productRequest->getProductOptionID());
    }

    public function getProductRequest()
    {
        if($this->productRequest === null) {
            $this->productRequest = new \AllDigitalRewards\Vendor\Replink\Entity\ProductRequest;
        }

        return $this->productRequest;
    }
}
