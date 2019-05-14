<?php


namespace YllyClicAndPay\Model\Result;


use YllyClicAndPay\Model\Response\Common;
use YllyClicAndPay\Model\Response\Payment;

class LegacyTransactionKey
{
    /**
     * @var Common
     */
    private $commonResponse;

    /**
     * @var Payment
     */
    private $paymentResponse;

    /**
     * @return Common
     */
    public function getCommonResponse(): Common
    {
        return $this->commonResponse;
    }

    /**
     * @param Common $commonResponse
     */
    public function setCommonResponse(Common $commonResponse): void
    {
        $this->commonResponse = $commonResponse;
    }

    /**
     * @return Payment
     */
    public function getPaymentResponse(): Payment
    {
        return $this->paymentResponse;
    }

    /**
     * @param Payment $paymentResponse
     */
    public function setPaymentResponse(Payment $paymentResponse): void
    {
        $this->paymentResponse = $paymentResponse;
    }
}