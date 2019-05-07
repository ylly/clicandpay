<?php

namespace YllyClicAndPay\Model\Response;

class ExtraDetails
{
    /** @var string */
    private $ipAddress;

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
}