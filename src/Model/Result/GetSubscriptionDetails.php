<?php


namespace YllyClicAndPay\Model\Result;


use YllyClicAndPay\Model\Response\Common;
use YllyClicAndPay\Model\Response\Subscription;
use YllyClicAndPay\Model\Response\Token;

class GetSubscriptionDetails
{
    /**
     * @var Common
     */
    private $commonResponse;

    /**
     * @var Subscription
     */
    private $subscriptionResponse;

    /**
     * @var Token
     */
    private $tokenResponse;

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
     * @return Subscription
     */
    public function getSubscriptionResponse(): Subscription
    {
        return $this->subscriptionResponse;
    }

    /**
     * @param Subscription $subscriptionResponse
     */
    public function setSubscriptionResponse(Subscription $subscriptionResponse): void
    {
        $this->subscriptionResponse = $subscriptionResponse;
    }

    /**
     * @return Token
     */
    public function getTokenResponse(): Token
    {
        return $this->tokenResponse;
    }

    /**
     * @param Token $tokenResponse
     */
    public function setTokenResponse(Token $tokenResponse): void
    {
        $this->tokenResponse = $tokenResponse;
    }
}