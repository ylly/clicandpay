<?php


namespace YllyClicAndPay\Model;


use YllyClicAndPay\Model\Request\LegacyTransactionKey;

class GetPaymentUuid
{
    /**
     * @var LegacyTransactionKey
     */
    private $legacyTransactionKeyRequest;

    /**
     * @return LegacyTransactionKey
     */
    public function getLegacyTransactionKeyRequest(): LegacyTransactionKey
    {
        return $this->legacyTransactionKeyRequest;
    }

    /**
     * @param LegacyTransactionKey $legacyTransactionKeyRequest
     */
    public function setLegacyTransactionKeyRequest(LegacyTransactionKey $legacyTransactionKeyRequest): void
    {
        $this->legacyTransactionKeyRequest = $legacyTransactionKeyRequest;
    }
}