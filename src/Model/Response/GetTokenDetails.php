<?php

namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\GetTokenDetailsResult;

class GetTokenDetails
{
    /**
     * @var GetTokenDetailsResult
     */
    private $getTokenDetailsResult;

    /**
     * @return GetTokenDetailsResult
     */
    public function getGetTokenDetailsResult()
    {
        return $this->getTokenDetailsResult;
    }

    /**
     * @param GetTokenDetailsResult $getTokenDetailsResult
     */
    public function setGetTokenDetailsResult($getTokenDetailsResult)
    {
        $this->getTokenDetailsResult = $getTokenDetailsResult;
    }
}