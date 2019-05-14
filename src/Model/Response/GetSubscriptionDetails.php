<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\GetSubscriptionDetails as GetSubscriptionDetailsResult;

class GetSubscriptionDetails
{
    /**
     * @var GetSubscriptionDetailsResult
     */
    private $getSubscriptionDetailsResult;

    /**
     * @return GetSubscriptionDetailsResult
     */
    public function getGetSubscriptionDetailsResult(): GetSubscriptionDetailsResult
    {
        return $this->getSubscriptionDetailsResult;
    }

    /**
     * @param GetSubscriptionDetailsResult $getSubscriptionDetailsResult
     */
    public function setGetSubscriptionDetailsResult(GetSubscriptionDetailsResult $getSubscriptionDetailsResult): void
    {
        $this->getSubscriptionDetailsResult = $getSubscriptionDetailsResult;
    }
}