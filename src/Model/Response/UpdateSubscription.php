<?php

namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\UpdateSubscription as UpdateSubscriptionResult;

class UpdateSubscription
{
    /**
     * @var UpdateSubscriptionResult
     */
    private $updateSubscriptionResult;

    /**
     * @return UpdateSubscriptionResult
     */
    public function getUpdateSubscriptionResult()
    {
        return $this->updateSubscriptionResult;
    }

    /**
     * @param UpdateSubscriptionResult $updateSubscriptionResult
     */
    public function setUpdateSubscriptionResult($updateSubscriptionResult)
    {
        $this->updateSubscriptionResult = $updateSubscriptionResult;
    }
}