<?php


namespace YllyClicAndPay\Model;

use YllyClicAndPay\Model\Request\Card;
use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Customer;
use YllyClicAndPay\Model\Request\Query;

class UpdateToken
{
    /**
     * @var Common
     */
    public $commonRequest;

    /**
     * @var Query
     */
    public $queryRequest;

    /**
     * @var Card
     */
    public $cardRequest;

    /**
     * @var Customer
     */
    public $customerRequest;

    /**
     * @return Common
     */
    public function getCommonRequest(): Common
    {
        return $this->commonRequest;
    }

    /**
     * @param Common $commonRequest
     */
    public function setCommonRequest(Common $commonRequest): void
    {
        $this->commonRequest = $commonRequest;
    }

    /**
     * @return Query
     */
    public function getQueryRequest(): Query
    {
        return $this->queryRequest;
    }

    /**
     * @param Query $queryRequest
     */
    public function setQueryRequest(Query $queryRequest): void
    {
        $this->queryRequest = $queryRequest;
    }

    /**
     * @return Card
     */
    public function getCardRequest(): Card
    {
        return $this->cardRequest;
    }

    /**
     * @param Card $cardRequest
     */
    public function setCardRequest(Card $cardRequest): void
    {
        $this->cardRequest = $cardRequest;
    }

    /**
     * @return Customer
     */
    public function getCustomerRequest(): Customer
    {
        return $this->customerRequest;
    }

    /**
     * @param Customer $customerRequest
     */
    public function setCustomerRequest(Customer $customerRequest): void
    {
        $this->customerRequest = $customerRequest;
    }
}