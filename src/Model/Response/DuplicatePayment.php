<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\DuplicatePayment as DuplicatePaymentResult;

class DuplicatePayment
{
    /**
     * @var DuplicatePaymentResult
     */
    private $duplicatePaymentResult;

    /**
     * @return DuplicatePaymentResult
     */
    public function getDuplicatePaymentResult(): DuplicatePaymentResult
    {
        return $this->duplicatePaymentResult;
    }

    /**
     * @param DuplicatePaymentResult $duplicatePaymentResult
     */
    public function setDuplicatePaymentResult(DuplicatePaymentResult $duplicatePaymentResult): void
    {
        $this->duplicatePaymentResult = $duplicatePaymentResult;
    }
}