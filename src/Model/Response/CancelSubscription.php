<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\CancelSubscription as CancelSubscriptionResult;

class CancelSubscription
{
    /**
     * @var CancelSubscriptionResult
     */
    private $cancelSubscriptionResult;

    /**
     * @return CancelSubscriptionResult
     */
    public function getCancelSubscriptionResult(): CancelSubscriptionResult
    {
        return $this->cancelSubscriptionResult;
    }

    /**
     * @param CancelSubscriptionResult $cancelSubscriptionResult
     */
    public function setCancelSubscriptionResult(CancelSubscriptionResult $cancelSubscriptionResult): void
    {
        $this->cancelSubscriptionResult = $cancelSubscriptionResult;
    }
}