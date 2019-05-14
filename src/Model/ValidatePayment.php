<?php


namespace YllyClicAndPay\Model;


use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Query;

class ValidatePayment
{
    /**
     * @var Common
     */
    private $commonRequest;

    /**
     * @var Query
     */
    private $queryRequest;

    /**
     * @return Common
     */
    public function getCommonRequest(): Common
    {
        return $this->commonRequest;
    }

    /**
     * @param Common $commonRequest
     */
    public function setCommonRequest(Common $commonRequest): void
    {
        $this->commonRequest = $commonRequest;
    }

    /**
     * @return Query
     */
    public function getQueryRequest(): Query
    {
        return $this->queryRequest;
    }

    /**
     * @param Query $queryRequest
     */
    public function setQueryRequest(Query $queryRequest): void
    {
        $this->queryRequest = $queryRequest;
    }
}