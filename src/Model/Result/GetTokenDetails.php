<?php

namespace YllyClicAndPay\Model\Result;

use YllyClicAndPay\Model\Response\Common;
use YllyClicAndPay\Model\Response\Subscription as SubscriptionResponse;
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
     * @var SubscriptionResponse
     */
    private $subscriptionResponse;

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

    /**
     * @return SubscriptionResponse
     */
    public function getSubscriptionResponse(): SubscriptionResponse
    {
        return $this->subscriptionResponse;
    }

    /**
     * @param SubscriptionResponse $subscriptionResponse
     */
    public function setSubscriptionResponse(SubscriptionResponse $subscriptionResponse): void
    {
        $this->subscriptionResponse = $subscriptionResponse;
    }
}