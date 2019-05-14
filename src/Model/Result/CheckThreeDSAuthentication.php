<?php


namespace YllyClicAndPay\Model\Result;


use YllyClicAndPay\Model\Response\Common;
use YllyClicAndPay\Model\Response\ThreeDS;

class CheckThreeDSAuthentication
{
    /**
     * @var Common
     */
    private $commonResponse;

    /**
     * @var ThreeDS
     */
    private $threeDSResponse;

    /**
     * @return Common
     */
    public function getCommonResponse(): Common
    {
        return $this->commonResponse;
    }

    /**
     * @param Common $commonResponse
     */
    public function setCommonResponse(Common $commonResponse): void
    {
        $this->commonResponse = $commonResponse;
    }

    /**
     * @return ThreeDS
     */
    public function getThreeDSResponse(): ThreeDS
    {
        return $this->threeDSResponse;
    }

    /**
     * @param ThreeDS $threeDSResponse
     */
    public function setThreeDSResponse(ThreeDS $threeDSResponse): void
    {
        $this->threeDSResponse = $threeDSResponse;
    }
}