<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\CapturePayment as CapturePaymentResult;
use YllyClicAndPay\Model\Result\Result;

class CapturePayment extends Result
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