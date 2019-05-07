<?php

namespace YllyClicAndPay\Model\Result;

use YllyClicAndPay\Model\Response\Common;

class CancelToken
{
    /**
     * @var Common
     */
    private $commonResponse;

    /**
     * @return Common
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param Common $commonResponse
     */
    public function setCommonResponse($commonResponse)
    {
        $this->commonResponse = $commonResponse;
    }
}