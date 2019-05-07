<?php

namespace YllyClicAndPay\Model;

use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Query;
use YllyClicAndPay\Model\Request\Subscription as SubscriptionRequest;

class UpdateSubscription
{
    /**
     * @var Common
     */
    private $commonRequest;

    /**
     * @var Query
     */
    private $queryRequest;

    /**
     * @var SubscriptionRequest
     */
    private $subscriptionRequest;

    /**
     * @return Common
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param Common $commonRequest
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
    }

    /**
     * @return Query
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param Query $queryRequest
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
    }

    /**
     * @return SubscriptionRequest
     */
    public function getSubscriptionRequest()
    {
        return $this->subscriptionRequest;
    }

    /**
     * @param SubscriptionRequest $subscriptionRequest
     */
    public function setSubscriptionRequest($subscriptionRequest)
    {
        $this->subscriptionRequest = $subscriptionRequest;
    }
}