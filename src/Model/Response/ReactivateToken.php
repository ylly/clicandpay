<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\ReactivateToken as ReactivateTokenResult;

class ReactivateToken
{
    /**
     * @var ReactivateTokenResult
     */
    private $reactivateTokenResult;

    /**
     * @return ReactivateTokenResult
     */
    public function getReactivateTokenResult(): ReactivateTokenResult
    {
        return $this->reactivateTokenResult;
    }

    /**
     * @param ReactivateTokenResult $reactivateTokenResult
     */
    public function setReactivateTokenResult(ReactivateTokenResult $reactivateTokenResult): void
    {
        $this->reactivateTokenResult = $reactivateTokenResult;
    }
}