<?php


namespace YllyClicAndPay\Model\Response;


class Extra
{
    /**
     * @var string
     */
    private $paymentOptionCode;

    /**
     * @var int
     */
    private $paymentOptionOccNumber;

    /**
     * @return string
     */
    public function getPaymentOptionCode()
    {
        return $this->paymentOptionCode;
    }

    /**
     * @param string $paymentOptionCode
     */
    public function setPaymentOptionCode($paymentOptionCode)
    {
        $this->paymentOptionCode = $paymentOptionCode;
    }

    /**
     * @return int
     */
    public function getPaymentOptionOccNumber()
    {
        return $this->paymentOptionOccNumber;
    }

    /**
     * @param int $paymentOptionOccNumber
     */
    public function setPaymentOptionOccNumber($paymentOptionOccNumber)
    {
        $this->paymentOptionOccNumber = $paymentOptionOccNumber;
    }
}