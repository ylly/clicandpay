<?php

namespace YllyClicAndPay\Model\Response;

use DateTime;
use YllyClicAndPay\PaymentType;

class Payment
{
    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var int
     */
    private $currency;

    /**
     * @var float
     */
    private $effectiveAmount;

    /**
     * @var int
     */
    private $effectiveCurrency;

    /**
     * @var datetime
     */
    private $expectedCaptureDate;

    /**
     * @var int
     */
    private $manualValidation;

    /**
     * @var int
     */
    private $operationType;

    /**
     * @var datetime
     */
    private $creationDate;

    /**
     * @var string
     */
    private $externalTransactionId;

    /**
     * @var string
     */
    private $liabilityShift;

    /**
     * @var int
     */
    private $sequenceNumber;

    /**
     * @var PaymentType
     */
    private $paymentType;

    /**
     * @var int
     */
    private $paymentError;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param int $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getEffectiveAmount()
    {
        return $this->effectiveAmount;
    }

    /**
     * @param float $effectiveAmount
     */
    public function setEffectiveAmount($effectiveAmount)
    {
        $this->effectiveAmount = $effectiveAmount;
    }

    /**
     * @return int
     */
    public function getEffectiveCurrency()
    {
        return $this->effectiveCurrency;
    }

    /**
     * @param int $effectiveCurrency
     */
    public function setEffectiveCurrency($effectiveCurrency)
    {
        $this->effectiveCurrency = $effectiveCurrency;
    }

    /**
     * @return DateTime
     */
    public function getExpectedCaptureDate()
    {
        return $this->expectedCaptureDate;
    }

    /**
     * @param DateTime $expectedCaptureDate
     */
    public function setExpectedCaptureDate($expectedCaptureDate)
    {
        $this->expectedCaptureDate = $expectedCaptureDate;
    }

    /**
     * @return int
     */
    public function getManualValidation()
    {
        return $this->manualValidation;
    }

    /**
     * @param int $manualValidation
     */
    public function setManualValidation($manualValidation)
    {
        $this->manualValidation = $manualValidation;
    }

    /**
     * @return int
     */
    public function getOperationType()
    {
        return $this->operationType;
    }

    /**
     * @param int $operationType
     */
    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param DateTime $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return string
     */
    public function getExternalTransactionId()
    {
        return $this->externalTransactionId;
    }

    /**
     * @param string $externalTransactionId
     */
    public function setExternalTransactionId($externalTransactionId)
    {
        $this->externalTransactionId = $externalTransactionId;
    }

    /**
     * @return string
     */
    public function getLiabilityShift()
    {
        return $this->liabilityShift;
    }

    /**
     * @param string $liabilityShift
     */
    public function setLiabilityShift($liabilityShift)
    {
        $this->liabilityShift = $liabilityShift;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @param int $sequenceNumber
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
    }

    /**
     * @return PaymentType
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param PaymentType $paymentType
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return int
     */
    public function getPaymentError()
    {
        return $this->paymentError;
    }

    /**
     * @param int $paymentError
     */
    public function setPaymentError($paymentError)
    {
        $this->paymentError = $paymentError;
    }
}
