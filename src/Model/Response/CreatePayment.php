<?php

namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\CreatePayment as CreatePaymentResult;

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