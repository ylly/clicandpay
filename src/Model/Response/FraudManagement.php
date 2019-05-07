<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\RiskAnalysis;
use YllyClicAndPay\RiskAssessments;
use YllyClicAndPay\RiskControl;

class FraudManagement
{
    /**
     * @var RiskControl
     */
    private $riskControl;

    /**
     * @var RiskAnalysis
     */
    private $riskAnalysis;

    /**
     * @var RiskAssessments
     */
    private $riskAssessments;

    /**
     * @return RiskControl
     */
    public function getRiskControl()
    {
        return $this->riskControl;
    }

    /**
     * @param RiskControl $riskControl
     */
    public function setRiskControl($riskControl)
    {
        $this->riskControl = $riskControl;
    }

    /**
     * @return RiskAnalysis
     */
    public function getRiskAnalysis()
    {
        return $this->riskAnalysis;
    }

    /**
     * @param RiskAnalysis $riskAnalysis
     */
    public function setRiskAnalysis($riskAnalysis)
    {
        $this->riskAnalysis = $riskAnalysis;
    }

    /**
     * @return RiskAssessments
     */
    public function getRiskAssessments()
    {
        return $this->riskAssessments;
    }

    /**
     * @param RiskAssessments $riskAssessments
     */
    public function setRiskAssessments($riskAssessments)
    {
        $this->riskAssessments = $riskAssessments;
    }
}