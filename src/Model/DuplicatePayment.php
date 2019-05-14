<?php


namespace YllyClicAndPay\Model;


use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Order;
use YllyClicAndPay\Model\Request\Payment;
use YllyClicAndPay\Model\Request\Query;

class DuplicatePayment
{
    /**
     * @var Common
     */
    public $commonRequest;

    /**
     * @var Payment
     */
    public $paymentRequest;

    /**
     * @var Order
     */
    public $orderRequest;

    /**
     * @var Query
     */
    public $queryRequest;

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
     * @return Payment
     */
    public function getPaymentRequest(): Payment
    {
        return $this->paymentRequest;
    }

    /**
     * @param Payment $paymentRequest
     */
    public function setPaymentRequest(Payment $paymentRequest): void
    {
        $this->paymentRequest = $paymentRequest;
    }

    /**
     * @return Order
     */
    public function getOrderRequest(): Order
    {
        return $this->orderRequest;
    }

    /**
     * @param Order $orderRequest
     */
    public function setOrderRequest(Order $orderRequest): void
    {
        $this->orderRequest = $orderRequest;
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
}