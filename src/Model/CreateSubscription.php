<?php


namespace YllyClicAndPay\Model;


use YllyClicAndPay\Model\Request\Card;
use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Order;
use YllyClicAndPay\Model\Request\Subscription as SubscriptionRequest;

class CreateSubscription
{
    /**
     * @var Common
     */
    private $commonRequest;

    /**
     * @var Order
     */
    private $orderRequest;

    /**
     * @var SubscriptionRequest
     */
    private $subscriptionRequest;

    /**
     * @var Card
     */
    private $cardRequest;

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
     * @return Order
     */
    public function getOrderRequest(): Order
    {
        return $this->orderRequest;
    }

    /**
     * @param Order $orderRequest
     */
    public function setOrderRequest(Order $orderRequest): void
    {
        $this->orderRequest = $orderRequest;
    }

    /**
     * @return SubscriptionRequest
     */
    public function getSubscriptionRequest(): SubscriptionRequest
    {
        return $this->subscriptionRequest;
    }

    /**
     * @param SubscriptionRequest $subscriptionRequest
     */
    public function setSubscriptionRequest(SubscriptionRequest $subscriptionRequest): void
    {
        $this->subscriptionRequest = $subscriptionRequest;
    }

    /**
     * @return Card
     */
    public function getCardRequest(): Card
    {
        return $this->cardRequest;
    }

    /**
     * @param Card $cardRequest
     */
    public function setCardRequest(Card $cardRequest): void
    {
        $this->cardRequest = $cardRequest;
    }
}