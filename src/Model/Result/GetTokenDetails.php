<?php

namespace YllyClicAndPay\Model\Result;

use YllyClicAndPay\Model\Response\Common;
use YllyClicAndPay\Model\Response\Token;

class GetTokenDetails extends Result
{
    /**
     * @var Common
     */
    private $commonResponse;

    /**
     * @var Token
     */
    private $tokenResponse;

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

    /**
     * @return Token
     */
    public function getTokenResponse()
    {
        return $this->tokenResponse;
    }

    /**
     * @param Token $tokenResponse
     */
    public function setTokenResponse($tokenResponse)
    {
        $this->tokenResponse = $tokenResponse;
    }
}