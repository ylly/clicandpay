<?php

namespace YllyClicAndPay\Model\Request;

use YllyClicAndPay\ExtInfo;

class Order
{
    /**
     * @var string
     */
    private $orderId;

    /**
     * @var ExtInfo
     */
    private $extInfo;

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return ExtInfo
     */
    public function getExtInfo()
    {
        return $this->extInfo;
    }

    /**
     * @param ExtInfo $extInfo
     */
    public function setExtInfo($extInfo)
    {
        $this->extInfo = $extInfo;
    }
}