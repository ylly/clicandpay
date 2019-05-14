<?php


namespace YllyClicAndPay\Model;


use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\ThreeDS;

class CheckThreeDSAuthentication
{
    /**
     * @var Common
     */
    private $commonRequest;

    /**
     * @var ThreeDS
     */
    private $threeDSRequest;

    /**
     * @return Common
     */
    public function getCommonRequest(): Common
    {
        return $this->commonRequest;
    }

    /**
     * @param Common $commonRequest
     */
    public function setCommonRequest(Common $commonRequest): void
    {
        $this->commonRequest = $commonRequest;
    }

    /**
     * @return ThreeDS
     */
    public function getThreeDSRequest(): ThreeDS
    {
        return $this->threeDSRequest;
    }

    /**
     * @param ThreeDS $threeDSRequest
     */
    public function setThreeDSRequest(ThreeDS $threeDSRequest): void
    {
        $this->threeDSRequest = $threeDSRequest;
    }
}