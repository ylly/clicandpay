<?php


namespace YllyClicAndPay\Model\Response;


use YllyClicAndPay\Model\Result\LegacyTransactionKey;

class GetPaymentUuid
{
    /**
     * @var LegacyTransactionKey
     */
    private $legacyTransactionKeyResult;

    /**
     * @return LegacyTransactionKey
     */
    public function getLegacyTransactionKeyResult(): LegacyTransactionKey
    {
        return $this->legacyTransactionKeyResult;
    }

    /**
     * @param LegacyTransactionKey $legacyTransactionKeyResult
     */
    public function setLegacyTransactionKeyResult(LegacyTransactionKey $legacyTransactionKeyResult): void
    {
        $this->legacyTransactionKeyResult = $legacyTransactionKeyResult;
    }
}