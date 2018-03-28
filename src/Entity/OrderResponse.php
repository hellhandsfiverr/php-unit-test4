<?php

namespace AllDigitalRewards\Vendor\Replink\Entity;

class OrderResponse extends AbstractReplinkEntity
{
    /**
     * @var string
     */
    public $orderID;

    /**
     * @var string
     */
    public $orderNumber;

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
    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     */
    public function setOrderNumber(string $orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }
}
