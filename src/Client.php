<?php

namespace AllDigitalRewards\Vendor\Replink;

use AllDigitalRewards\Vendor\Replink\Entity\OrderRequest;
use AllDigitalRewards\Vendor\Replink\Entity\OrderResponse;
use Psr\Log\LoggerInterface;

class Client
{
    const PROGRAM_ID = '50939398-2345-2234-2456-cb076a14f6c8';

    const URL = 'http://webservices.replink.net';

    const WSDL_URL = 'http://webservices.replink.net/replinkorderservice.asmx?wsdl';

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var SoapClient
     */
    private $client;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var array
     */
    private $errors = [];

    public function __construct(array $options = null)
    {
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    /**
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return SoapClient
     */
    public function getSoapClient(): SoapClient
    {
        if ($this->client === null) {
            $auth = [
                'UserID' => $this->getUsername(),
                'DevKey' => $this->getPassword()
            ];

            $options = [
                'exceptions' => 0,
                'trace' => 1,
                'soap_version' => SOAP_1_2,
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS
            ];

            $header = new \SoapHeader(self::URL, 'ReplinkCredentials', $auth, false);
            $this->client = new SoapClient(self::WSDL_URL, $options);
            $this->client->__setSoapHeaders($header);
        }

        return $this->client;
    }

    /**
     * @param SoapClient $client
     */
    public function setSoapClient(SoapClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * @param OrderRequest $request
     * @param array $products
     * @return OrderResponse|null
     */
    public function addOrder(OrderRequest $request, array $products): ?OrderResponse
    {
        $request->setProgramID(self::PROGRAM_ID);
        $request->setProducts($this->formatOrderProducts($products));

        $order = ['order' => $request->toArray()];
        $response = $this->getSoapClient()->addOrder($order);

        if (!isset($response->addOrderResult->orderItemAddReturn->replinkOrderCollection->replinkOrder)) {
            $errors = json_decode(json_encode($response->addOrderResult->orderItemAddReturn->errorCollection), true)['dtoErrorItem'];
            $this->setErrors($errors);

            if ($this->logger !== null) {
                $this->getLogger()->warning('Replink order failure', [
                    $request->getProgramName(),
                    $request->getShipToEmail()
                ]);
            }

            return null;
        }

        //Successful
//        print_r($this->getSoapClient()->__getLastResponse());
        $parsedResponse = json_decode(json_encode($response->addOrderResult->orderItemAddReturn->replinkOrderCollection->replinkOrder), true);
        $response = new OrderResponse($parsedResponse[0]);

        if ($this->logger !== null) {
            $this->getLogger()->notice('Replink order submitted', [
                'order_id' => $response->getOrderID(),
                'order_number' => $response->getOrderNumber()
            ]);
        }

        return $response;
    }

    private function formatOrderProducts(array $products): array
    {
        $productContainer = [
            'dtoOrderProductAdd' => []
        ];
        foreach ($products as $product) {
            $productContainer['dtoOrderProductAdd'][] = $product->toArray();
        }

        return $productContainer;
    }
}
