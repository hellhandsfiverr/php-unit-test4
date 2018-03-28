<?php

namespace AllDigitalRewards\Vendor\Replink\Entity;

class OrderRequest extends AbstractReplinkEntity
{
    /**
     * @var string
     */
    public $programID;

    /**
     * @var string
     */
    public $programName;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $resellerOrderNumber;

    /**
     * @var string
     */
    public $billToCompanyName;

    /**
     * @var string
     */
    public $shipToParticipantID = '00000000-0000-0000-0000-000000000000';

    /**
     * @var string
     */
    public $shipToName;

    /**
     * @var string
     */
    public $shipToAddress1;

    /**
     * @var string
     */
    public $shipToAddress2;

    /**
     * @var string
     */
    public $shipToCity;

    /**
     * @var string
     */
    public $shipToState;

    /**
     * @var string
     */
    public $shipToZip;

    /**
     * @var string
     */
    public $shipToEmail;

    /**
     * @var string
     */
    public $shipToPhone;

    /**
     * @var string ISO 8601 date (date(c))
     */
    public $orderDate;

    /**
     * @var string ISO 8601 date (date(c))
     */
    public $requestShipDate;

    /**
     * @var ProductRequest[]
     */
    public $products;

    /**
     * @return string
     */
    public function getProgramID(): string
    {
        return $this->programID;
    }

    /**
     * @param string $programID
     */
    public function setProgramID(string $programID)
    {
        $this->programID = $programID;
    }

    /**
     * @return string
     */
    public function getProgramName(): string
    {
        return $this->programName;
    }

    /**
     * @param string $programName
     */
    public function setProgramName(string $programName)
    {
        $this->programName = $programName;
    }

    /**
     * @return string
     */
    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    /**
     * @param string $customerName
     */
    public function setCustomerName(string $customerName)
    {
        $this->customerName = $customerName;
    }

    /**
     * @return string
     */
    public function getResellerOrderNumber():string
    {
        return $this->resellerOrderNumber;
    }

    /**
     * @param string $resellerOrderNumber
     */
    public function setResellerOrderNumber(string $resellerOrderNumber)
    {
        $this->resellerOrderNumber = $resellerOrderNumber;
    }

    /**
     * @return string
     */
    public function getBillToCompanyName(): string
    {
        return $this->billToCompanyName;
    }

    /**
     * @param string $billToCompanyName
     */
    public function setBillToCompanyName(string $billToCompanyName)
    {
        $this->billToCompanyName = $billToCompanyName;
    }

    /**
     * @return mixed
     */
    public function getShipToParticipantID()
    {
        return $this->shipToParticipantID;
    }

    public function setShipToParticipanID(string $participantId)
    {
        $this->shipToParticipantID = $participantId;
    }

    /**
     * @return string
     */
    public function getShipToName(): string
    {
        return $this->shipToName;
    }

    /**
     * @param string $shipToName
     */
    public function setShipToName(string $shipToName)
    {
        $this->shipToName = $shipToName;
    }

    /**
     * @return string
     */
    public function getShipToAddress1(): string
    {
        return $this->shipToAddress1;
    }

    /**
     * @param string $shipToAddress1
     */
    public function setShipToAddress1(string $shipToAddress1)
    {
        $this->shipToAddress1 = $shipToAddress1;
    }

    /**
     * @return string
     */
    public function getShipToAddress2(): string
    {
        return $this->shipToAddress2;
    }

    /**
     * @param string $shipToAddress2
     */
    public function setShipToAddress2(string $shipToAddress2)
    {
        $this->shipToAddress2 = $shipToAddress2;
    }

    /**
     * @return string
     */
    public function getShipToCity(): string
    {
        return $this->shipToCity;
    }

    /**
     * @param string $shipToCity
     */
    public function setShipToCity(string $shipToCity)
    {
        $this->shipToCity = $shipToCity;
    }

    /**
     * @return string
     */
    public function getShipToState(): string
    {
        return $this->shipToState;
    }

    /**
     * @param string $shipToState
     */
    public function setShipToState(string $shipToState)
    {
        $this->shipToState = $shipToState;
    }

    /**
     * @return string
     */
    public function getShipToZip(): string
    {
        return $this->shipToZip;
    }

    /**
     * @param string $shipToZip
     */
    public function setShipToZip(string $shipToZip)
    {
        $this->shipToZip = $shipToZip;
    }

    /**
     * @return string
     */
    public function getShipToEmail(): string
    {
        return $this->shipToEmail;
    }

    /**
     * @param string $shipToEmail
     */
    public function setShipToEmail(string $shipToEmail)
    {
        $this->shipToEmail = $shipToEmail;
    }

    /**
     * @return string
     */
    public function getOrderDate(): string
    {
        return $this->orderDate;
    }

    /**
     * @param string $orderDate
     */
    public function setOrderDate(string $orderDate)
    {
        $this->orderDate = $orderDate;
    }

    /**
     * @return string
     */
    public function getShipToPhone(): string
    {
        return $this->shipToPhone;
    }

    /**
     * @param string $shipToPhone
     */
    public function setShipToPhone(string $shipToPhone)
    {
        $this->shipToPhone = $shipToPhone;
    }

    /**
     * @return string
     */
    public function getRequestShipDate(): string
    {
        return $this->requestShipDate;
    }

    /**
     * @param string $requestShipDate
     */
    public function setRequestShipDate(string $requestShipDate)
    {
        $this->requestShipDate = $requestShipDate;
    }

    /**
     * @return ProductRequest[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param ProductRequest[] $products
     */
    public function setProducts(array $products)
    {
        $this->products = $products;
    }
}
