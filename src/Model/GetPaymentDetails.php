<?php


namespace YllyClicAndPay\Model;


use YllyClicAndPay\Model\Request\Query;

class GetPaymentDetails
{
    /**
     * @var Query
     */
    private $queryRequest;

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