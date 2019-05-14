<?php


namespace YllyClicAndPay\Model;


use YllyClicAndPay\Model\Request\Card;
use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Payment;
use YllyClicAndPay\Model\Request\Tech;

class VerifyThreeDSEnrollment
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
     * @var Card
     */
    private $cardRequest;

    /**
     * @var Tech
     */
    private $techRequest;

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
     * @return Card
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }

    /**
     * @param Card $cardRequest
     */
    public function setCardRequest($cardRequest)
    {
        $this->cardRequest = $cardRequest;
    }

    /**
     * @return Tech
     */
    public function getTechRequest()
    {
        return $this->techRequest;
    }

    /**
     * @param Tech $techRequest
     */
    public function setTechRequest($techRequest)
    {
        $this->techRequest = $techRequest;
    }
}