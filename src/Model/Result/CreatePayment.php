<?php

namespace YllyClicAndPay\Model\Result;

use YllyClicAndPay\Model\Response\Common;
use YllyClicAndPay\Model\Response\ShoppingCart;
use YllyClicAndPay\Model\Response\Subscription as SubscriptionResponse;

class CreatePayment extends Result
{
    /**
     * @var Common
     */
    private $commonResponse;

    /**
     * @var ShoppingCart
     */
    private $shoppingCartResponse;

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
     * @return ShoppingCart
     */
    public function getShoppingCartResponse()
    {
        return $this->shoppingCartResponse;
    }

    /**
     * @param ShoppingCart $shoppingCartResponse
     */
    public function setShoppingCartResponse($shoppingCartResponse)
    {
        $this->shoppingCartResponse = $shoppingCartResponse;
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