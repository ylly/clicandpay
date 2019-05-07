<?php

namespace YllyClicAndPay\Model\Request;

use YllyClicAndPay\ThreeDSMode;

class ThreeDS
{
    /**
     * @var ThreeDSMode
     */
    private $mode;

    /**
     * @var string
     */
    private $requestId;

    /**
     * @var string
     */
    private $pares;

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
    private $algorithm;

    /**
     * @return ThreeDSMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param ThreeDSMode $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * @return string
     */
    public function getPares()
    {
        return $this->pares;
    }

    /**
     * @param string $pares
     */
    public function setPares($pares)
    {
        $this->pares = $pares;
    }

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
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * @param string $algorithm
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
    }
}