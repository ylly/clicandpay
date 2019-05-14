<?php


namespace YllyClicAndPay\Model\Result;


use YllyClicAndPay\Model\Response\Common;
use YllyClicAndPay\Model\Response\Subscription as SubscriptionResponse;
use YllyClicAndPay\Model\Response\Token;

class GetPaymentDetails extends Result
{
    /**
     * @var Common
     */
    public $commonResponse;

    /**
     * @var Token
     */
    public $tokenResponse;

    /**
     * @var SubscriptionResponse
     */
    private $subscriptionResponse;

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