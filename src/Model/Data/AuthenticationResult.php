<?php

namespace YllyClicAndPay\Model\Data;

class AuthenticationResult
{
    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $enrolled;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $eci;

    /**
     * @var string
     */
    private $xid;

    /**
     * @var string
     */
    private $cavv;

    /**
     * @var string
     */
    private $cavvAlgorithm;

    /**
     * @var string
     */
    private $signValid;

    /**
     * @var string
     */
    private $transactionCondition;

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getEnrolled()
    {
        return $this->enrolled;
    }

    /**
     * @param string $enrolled
     */
    public function setEnrolled($enrolled)
    {
        $this->enrolled = $enrolled;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * @param string $eci
     */
    public function setEci($eci)
    {
        $this->eci = $eci;
    }

    /**
     * @return string
     */
    public function getXid()
    {
        return $this->xid;
    }

    /**
     * @param string $xid
     */
    public function setXid($xid)
    {
        $this->xid = $xid;
    }

    /**
     * @return string
     */
    public function getCavv()
    {
        return $this->cavv;
    }

    /**
     * @param string $cavv
     */
    public function setCavv($cavv)
    {
        $this->cavv = $cavv;
    }

    /**
     * @return string
     */
    public function getCavvAlgorithm()
    {
        return $this->cavvAlgorithm;
    }

    /**
     * @param string $cavvAlgorithm
     */
    public function setCavvAlgorithm($cavvAlgorithm)
    {
        $this->cavvAlgorithm = $cavvAlgorithm;
    }

    /**
     * @return string
     */
    public function getSignValid()
    {
        return $this->signValid;
    }

    /**
     * @param string $signValid
     */
    public function setSignValid($signValid)
    {
        $this->signValid = $signValid;
    }

    /**
     * @return string
     */
    public function getTransactionCondition()
    {
        return $this->transactionCondition;
    }

    /**
     * @param string $transactionCondition
     */
    public function setTransactionCondition($transactionCondition)
    {
        $this->transactionCondition = $transactionCondition;
    }
}