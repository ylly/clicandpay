<?php

namespace YllyClicAndPay\Model;

use YllyClicAndPay\Model\Request\Settlement;

class CapturePayment
{
    /**
     * @var Settlement
     */
    private $settlementRequest;

    /**
     * @return Settlement
     */
    public function getSettlementRequest()
    {
        return $this->settlementRequest;
    }

    /**
     * @param Settlement $settlementRequest
     */
    public function setSettlementRequest($settlementRequest)
    {
        $this->settlementRequest = $settlementRequest;
    }
}