<?php

namespace YllyClicAndPay\Model;

use YllyClicAndPay\Model\Request\Card;
use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Customer;

class CreateToken
{
    /**
     * @var Common
     */
    private $commonRequest;

    /**
     * @var Card
     */
    private $cardRequest;

    /**
     * @var Customer
     */
    private $customerRequest;

    /**
     * @return Common
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param Common $commonRequest
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
    }

    /**
     * @return Card
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }

    /**
     * @param Card $cardRequest
     */
    public function setCardRequest($cardRequest)
    {
        $this->cardRequest = $cardRequest;
    }

    /**
     * @return Customer
     */
    public function getCustomerRequest()
    {
        return $this->customerRequest;
    }

    /**
     * @param Customer $customerRequest
     */
    public function setCustomerRequest($customerRequest)
    {
        $this->customerRequest = $customerRequest;
    }
}