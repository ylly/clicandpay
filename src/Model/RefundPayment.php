<?php

namespace YllyClicAndPay\Model;

use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Payment;
use YllyClicAndPay\Model\Request\Query;

class RefundPayment
{
    /**
     * @var Common
     */
    private $commonRequest;

    /**
     * @var Payment
     */
    private $paymentRequest;

    /**
     * @var Query
     */
    private $queryRequest;

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
     * @return Payment
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * @param Payment $paymentRequest
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;
    }

    /**
     * @return Query
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param Query $queryRequest
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
    }
}