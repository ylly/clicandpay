<?php

namespace YllyClicAndPay\Model\Request;

use DateTime;

class Subscription
{
    /**
     * @var string
     */
    private $subscriptionId;

    /**
     * @var datetime
     */
    private $effectDate;

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
    private $initialAmount;

    /**
     * @var int
     */
    private $initialAmountNumber;

    /**
     * @var string
     */
    private $rrule;

    /**
     * @var string
     */
    private $description;

    /**
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @param string $subscriptionId
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * @return DateTime
     */
    public function getEffectDate()
    {
        return $this->effectDate;
    }

    /**
     * @param DateTime $effectDate
     */
    public function setEffectDate($effectDate)
    {
        $this->effectDate = $effectDate;
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
    public function getInitialAmount()
    {
        return $this->initialAmount;
    }

    /**
     * @param float $initialAmount
     */
    public function setInitialAmount($initialAmount)
    {
        $this->initialAmount = $initialAmount;
    }

    /**
     * @return int
     */
    public function getInitialAmountNumber()
    {
        return $this->initialAmountNumber;
    }

    /**
     * @param int $initialAmountNumber
     */
    public function setInitialAmountNumber($initialAmountNumber)
    {
        $this->initialAmountNumber = $initialAmountNumber;
    }

    /**
     * @return string
     */
    public function getRrule()
    {
        return $this->rrule;
    }

    /**
     * @param string $rrule
     */
    public function setRrule($rrule)
    {
        $this->rrule = $rrule;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}