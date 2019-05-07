<?php

namespace YllyClicAndPay\Model;

class RiskAnalysis
{
    /**
     * @var string
     */
    private $score;

    /**
     * @var string
     */
    private $resultCode;

    /**
     * @var VadRiskAnalysisProcesssingStatus
     */
    private $status;

    /**
     * @var string
     */
    private $requestId;

    /**
     * @var ExtInfo
     */
    private $extraInfo;

    /**
     * @return string
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param string $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * @return string
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * @param string $resultCode
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;
    }

    /**
     * @return VadRiskAnalysisProcesssingStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param VadRiskAnalysisProcesssingStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

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

    /**
     * @return ExtInfo
     */
    public function getExtraInfo()
    {
        return $this->extraInfo;
    }

    /**
     * @param ExtInfo $extraInfo
     */
    public function setExtraInfo($extraInfo)
    {
        $this->extraInfo = $extraInfo;
    }
}