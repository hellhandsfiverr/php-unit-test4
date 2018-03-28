<?php

namespace AllDigitalRewards\Vendor\Replink\Entity;

class ProductRequest extends AbstractReplinkEntity
{
    /**
     * @var string
     */
    public $productID;

    /**
     * @var int
     */
    public $OP_ThirdPartyShipping = 1;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $orderID = '00000000-0000-0000-0000-000000000000';

    /**
     * @var string
     */
    public $productOptionID = '00000000-0000-0000-0000-000000000000';

    /**
     * @return string
     */
    public function getProductID():string
    {
        return $this->productID;
    }

    /**
     * @param string $productID
     */
    public function setProductID(string $productID)
    {
        $this->productID = $productID;
    }

    /**
     * @return bool
     */
    public function isOPThirdPartyShipping(): bool
    {
        return $this->OP_ThirdPartyShipping === 1;
    }

    /**
     * @return int
     */
    public function getOPThirdPartyShipping(): int
    {
        return $this->OP_ThirdPartyShipping;
    }

    /**
     * @param int $OP_ThirdPartyShipping
     */
    public function setOPThirdPartyShipping(int $OP_ThirdPartyShipping)
    {
        $this->OP_ThirdPartyShipping = $OP_ThirdPartyShipping;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getOrderID(): string
    {
        return $this->orderID;
    }

    /**
     * @param string $orderID
     */
    public function setOrderID(string $orderID)
    {
        $this->orderID = $orderID;
    }

    /**
     * @return string
     */
    public function getProductOptionID(): string
    {
        return $this->productOptionID;
    }

    /**
     * @param string $productOptionID
     */
    public function setProductOptionID(string $productOptionID)
    {
        $this->productOptionID = $productOptionID;
    }
}
