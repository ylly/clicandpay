<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\CapturePayment as CapturePaymentResult;

class CapturePayment
{
    /**
     * @var CapturePaymentResult
     */
    private $capturePaymentResult;

    /**
     * @return CapturePaymentResult
     */
    public function getCapturePaymentResult()
    {
        return $this->capturePaymentResult;
    }

    /**
     * @param CapturePaymentResult $capturePaymentResult
     */
    public function setCapturePaymentResult($capturePaymentResult)
    {
        $this->capturePaymentResult = $capturePaymentResult;
    }
}