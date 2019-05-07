<?php

namespace YllyClicAndPay\Model\Data;

class AuthenticationRequest
{
    /**
     * @var string
     */
    private $threeDSAcctId;

    /**
     * @var string
     */
    private $threeDSAcsUrl;

    /**
     * @var string
     */
    private $threeDSBrand;

    /**
     * @var string
     */
    private $threeDSEncodedPareq;

    /**
     * @var string
     */
    private $threeDSEnrolled;

    /**
     * @var string
     */
    private $threeDSRequestId;

    /**
     * @return string
     */
    public function getThreeDSAcctId()
    {
        return $this->threeDSAcctId;
    }

    /**
     * @param string $threeDSAcctId
     */
    public function setThreeDSAcctId($threeDSAcctId)
    {
        $this->threeDSAcctId = $threeDSAcctId;
    }

    /**
     * @return string
     */
    public function getThreeDSAcsUrl()
    {
        return $this->threeDSAcsUrl;
    }

    /**
     * @param string $threeDSAcsUrl
     */
    public function setThreeDSAcsUrl($threeDSAcsUrl)
    {
        $this->threeDSAcsUrl = $threeDSAcsUrl;
    }

    /**
     * @return string
     */
    public function getThreeDSBrand()
    {
        return $this->threeDSBrand;
    }

    /**
     * @param string $threeDSBrand
     */
    public function setThreeDSBrand($threeDSBrand)
    {
        $this->threeDSBrand = $threeDSBrand;
    }

    /**
     * @return string
     */
    public function getThreeDSEncodedPareq()
    {
        return $this->threeDSEncodedPareq;
    }

    /**
     * @param string $threeDSEncodedPareq
     */
    public function setThreeDSEncodedPareq($threeDSEncodedPareq)
    {
        $this->threeDSEncodedPareq = $threeDSEncodedPareq;
    }

    /**
     * @return string
     */
    public function getThreeDSEnrolled()
    {
        return $this->threeDSEnrolled;
    }

    /**
     * @param string $threeDSEnrolled
     */
    public function setThreeDSEnrolled($threeDSEnrolled)
    {
        $this->threeDSEnrolled = $threeDSEnrolled;
    }

    /**
     * @return string
     */
    public function getThreeDSRequestId()
    {
        return $this->threeDSRequestId;
    }

    /**
     * @param string $threeDSRequestId
     */
    public function setThreeDSRequestId($threeDSRequestId)
    {
        $this->threeDSRequestId = $threeDSRequestId;
    }
}