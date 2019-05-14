<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\CreateSubscription as CreateSubscriptionResult;

class CreateSubscription
{
    /**
     * @var CreateSubscriptionResult
     */
    private $createSubscriptionResult;

    /**
     * @return CreateSubscriptionResult
     */
    public function getCreateSubscriptionResult(): CreateSubscriptionResult
    {
        return $this->createSubscriptionResult;
    }

    /**
     * @param CreateSubscriptionResult $createSubscriptionResult
     */
    public function setCreateSubscriptionResult(CreateSubscriptionResult $createSubscriptionResult): void
    {
        $this->createSubscriptionResult = $createSubscriptionResult;
    }
}