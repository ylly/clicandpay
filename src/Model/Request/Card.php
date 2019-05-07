<?php


namespace YllyClicAndPay\Model\Request;


use DateTime;

class Card
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $scheme;

    /**
     * @var int
     */
    private $expiryMonth;

    /**
     * @var int
     */
    private $expiryYear;

    /**
     * @var string
     */
    private $cardSecurityCode;

    /**
     * @var datetime
     */
    private $cardHolderBirthDay;

    /**
     * @var string
     */
    private $paymentToken;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
    }

    /**
     * @return int
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * @param int $expiryMonth
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;
    }

    /**
     * @return int
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * @param int $expiryYear
     */
    public function setExpiryYear($expiryYear)
    {
        $this->expiryYear = $expiryYear;
    }

    /**
     * @return string
     */
    public function getCardSecurityCode()
    {
        return $this->cardSecurityCode;
    }

    /**
     * @param string $cardSecurityCode
     */
    public function setCardSecurityCode($cardSecurityCode)
    {
        $this->cardSecurityCode = $cardSecurityCode;
    }

    /**
     * @return DateTime
     */
    public function getCardHolderBirthDay()
    {
        return $this->cardHolderBirthDay;
    }

    /**
     * @param DateTime $cardHolderBirthDay
     */
    public function setCardHolderBirthDay($cardHolderBirthDay)
    {
        $this->cardHolderBirthDay = $cardHolderBirthDay;
    }

    /**
     * @return string
     */
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }

    /**
     * @param string $paymentToken
     */
    public function setPaymentToken($paymentToken)
    {
        $this->paymentToken = $paymentToken;
    }
}