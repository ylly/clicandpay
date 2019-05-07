<?php


namespace YllyClicAndPay\Model\Request;


use DateTime;

class Payment
{
    /**
     * @var string
     */
    public $transactionId;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var int
     */
    public $currency;
    /**
     * @var datetime
     */
    public $expectedCaptureDate;
    /**
     * @var int
     */
    public $manualValidation;
    /**
     * @var string
     */
    public $paymentOptionCode;
    /**
     * @var string
     */
    public $retryUuid;
}