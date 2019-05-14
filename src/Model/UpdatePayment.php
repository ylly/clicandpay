<?php


namespace YllyClicAndPay\Model;


use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Payment;
use YllyClicAndPay\Model\Request\Query;

class UpdatePayment
{
    /**
     * @var Common
     */
    private $commonRequest;

    /**
     * @var Query
     */
    private $queryRequest;

    /**
     * @var Payment
     */
    private $paymentRequest;

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
}