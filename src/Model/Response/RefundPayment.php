<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\RefundPayment as RefundPaymentResult;

class RefundPayment
{
    /**
     * @var RefundPaymentResult
     */
    private $refundPaymentResult;

    /**
     * @return RefundPaymentResult
     */
    public function getRefundPaymentResult()
    {
        return $this->refundPaymentResult;
    }

    /**
     * @param RefundPaymentResult $refundPaymentResult
     */
    public function setRefundPaymentResult($refundPaymentResult)
    {
        $this->refundPaymentResult = $refundPaymentResult;
    }
}