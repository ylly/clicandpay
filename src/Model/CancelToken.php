<?php

namespace YllyClicAndPay\Model;

use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Query;

class CancelToken
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
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param Common $commonRequest
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
    }

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