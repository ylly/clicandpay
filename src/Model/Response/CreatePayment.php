<?php

namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\CreatePaymentResult;

class CreatePayment
{
    /**
     * @var CreatePaymentResult
     */
    private $createPaymentResult;

    /**
     * @return CreatePaymentResult
     */
    public function getCreatePaymentResult()
    {
        return $this->createPaymentResult;
    }

    /**
     * @param CreatePaymentResult $createPaymentResult
     */
    public function setCreatePaymentResult($createPaymentResult)
    {
        $this->createPaymentResult = $createPaymentResult;
    }
}