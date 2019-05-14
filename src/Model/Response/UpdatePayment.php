<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\UpdatePayment as UpdatePaymentResult;

class UpdatePayment
{
    /**
     * @var UpdatePaymentResult
     */
    private $updatePaymentResult;

    /**
     * @return UpdatePaymentResult
     */
    public function getUpdatePaymentResult(): UpdatePaymentResult
    {
        return $this->updatePaymentResult;
    }

    /**
     * @param UpdatePaymentResult $updatePaymentResult
     */
    public function setUpdatePaymentResult(UpdatePaymentResult $updatePaymentResult): void
    {
        $this->updatePaymentResult = $updatePaymentResult;
    }
}