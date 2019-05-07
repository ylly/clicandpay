<?php

namespace YllyClicAndPay\Model;

use DateTime;

class TransactionItem
{
    /**
     * @var string
     */
    private $transactionUuid;

    /**
     * @var string
     */
    private $transactionStatusLabel;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var int
     */
    private $currency;

    /**
     * @var datetime
     */
    private $expectedCaptureDate;

    /**
     * @return string
     */
    public function getTransactionUuid()
    {
        return $this->transactionUuid;
    }

    /**
     * @param string $transactionUuid
     */
    public function setTransactionUuid($transactionUuid)
    {
        $this->transactionUuid = $transactionUuid;
    }

    /**
     * @return string
     */
    public function getTransactionStatusLabel()
    {
        return $this->transactionStatusLabel;
    }

    /**
     * @param string $transactionStatusLabel
     */
    public function setTransactionStatusLabel($transactionStatusLabel)
    {
        $this->transactionStatusLabel = $transactionStatusLabel;
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
}