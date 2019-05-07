<?php

namespace YllyClicAndPay\Model\Request;

use DateTime;

class Settlement
{
    /**
     * @var string
     */
    private $transactionUuids;
    /**
     * @var double
     */
    private $commission;
    /**
     * @var datetime
     */
    private $date;

    /**
     * @return string
     */
    public function getTransactionUuids()
    {
        return $this->transactionUuids;
    }

    /**
     * @param string $transactionUuids
     */
    public function setTransactionUuids($transactionUuids)
    {
        $this->transactionUuids = $transactionUuids;
    }

    /**
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param float $commission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;
    }

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
}