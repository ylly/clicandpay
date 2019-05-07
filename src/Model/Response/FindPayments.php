<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\FindPayments as FindPaymentsResult;

class FindPayments
{
    /**
     * @var FindPaymentsResult
     */
    private $findPaymentsResult;

    /**
     * @return FindPaymentsResult
     */
    public function getFindPaymentsResult()
    {
        return $this->findPaymentsResult;
    }

    /**
     * @param FindPaymentsResult $findPaymentsResult
     */
    public function setFindPaymentsResult($findPaymentsResult)
    {
        $this->findPaymentsResult = $findPaymentsResult;
    }
}