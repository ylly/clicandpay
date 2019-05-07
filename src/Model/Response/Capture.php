<?php

namespace YllyClicAndPay\Model\Response;

use DateTime;

class Capture
{
    /**
     * @var datetime
     */
    private $date;

    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $reconciliationStatus;

    /**
     * @var
     */
    private $refundAmount;

    /**
     * @var int
     */
    private $refundCurrency;

    /**
     * @var bool
     */
    private $chargeback;

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return int
     */
    public function getReconciliationStatus()
    {
        return $this->reconciliationStatus;
    }

    /**
     * @param int $reconciliationStatus
     */
    public function setReconciliationStatus($reconciliationStatus)
    {
        $this->reconciliationStatus = $reconciliationStatus;
    }

    /**
     * @return mixed
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * @param mixed $refundAmount
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * @return int
     */
    public function getRefundCurrency()
    {
        return $this->refundCurrency;
    }

    /**
     * @param int $refundCurrency
     */
    public function setRefundCurrency($refundCurrency)
    {
        $this->refundCurrency = $refundCurrency;
    }

    /**
     * @return bool
     */
    public function isChargeback()
    {
        return $this->chargeback;
    }

    /**
     * @param bool $chargeback
     */
    public function setChargeback($chargeback)
    {
        $this->chargeback = $chargeback;
    }
}