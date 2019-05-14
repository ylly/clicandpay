<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\CancelPayment as CancelPaymentResult;

class CancelPayment
{
    /**
     * @var CancelPaymentResult
     */
    private $cancelPaymentResult;

    /**
     * @return CancelPaymentResult
     */
    public function getCancelPaymentResult(): CancelPaymentResult
    {
        return $this->cancelPaymentResult;
    }

    /**
     * @param CancelPaymentResult $cancelPaymentResult
     */
    public function setCancelPaymentResult(CancelPaymentResult $cancelPaymentResult): void
    {
        $this->cancelPaymentResult = $cancelPaymentResult;
    }
}