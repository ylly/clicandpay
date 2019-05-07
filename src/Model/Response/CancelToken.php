<?php

namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\CancelTokenResult;

class CancelToken
{
    /**
     * @var CancelTokenResult
     */
    private $cancelTokenResult;

    /**
     * @return CancelTokenResult
     */
    public function getCancelTokenResult()
    {
        return $this->cancelTokenResult;
    }

    /**
     * @param CancelTokenResult $cancelTokenResult
     */
    public function setCancelTokenResult($cancelTokenResult)
    {
        $this->cancelTokenResult = $cancelTokenResult;
    }
}