<?php

namespace YllyClicAndPay\Model;

class RiskAssessments
{
    /**
     * @var string
     */
    private $results;

    /**
     * @return string
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param string $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }
}