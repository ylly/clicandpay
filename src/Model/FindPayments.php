<?php

namespace YllyClicAndPay\Model;

use YllyClicAndPay\Model\Request\Query;

class FindPayments
{
    /**
     * @var Query
     */
    private $queryRequest;

    /**
     * @return Query
     */
    public function getQueryRequest()
    {
        return $this->queryRequest;
    }

    /**
     * @param Query $queryRequest
     */
    public function setQueryRequest($queryRequest)
    {
        $this->queryRequest = $queryRequest;
    }
}