<?php

namespace YllyClicAndPay\Model\Response;

class Ws
{
    /**
     * @var string
     */
    private $requestId;

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }
}