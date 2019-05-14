<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\ValidatePayment as ValidatePaymentResult;

class ValidatePayment
{
    /**
     * @var ValidatePaymentResult
     */
    private $validatePaymentResult;

    /**
     * @return ValidatePaymentResult
     */
    public function getValidatePaymentResult(): ValidatePaymentResult
    {
        return $this->validatePaymentResult;
    }

    /**
     * @param ValidatePaymentResult $validatePaymentResult
     */
    public function setValidatePaymentResult(ValidatePaymentResult $validatePaymentResult): void
    {
        $this->validatePaymentResult = $validatePaymentResult;
    }
}