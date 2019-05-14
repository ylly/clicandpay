<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\CheckThreeDSAuthentication as CheckThreeDSAuthenticationResult;

class CheckThreeDSAuthentication
{
    /**
     * @var CheckThreeDSAuthenticationResult
     */
    private $checkThreeDSAuthenticationResult;

    /**
     * @return CheckThreeDSAuthenticationResult
     */
    public function getCheckThreeDSAuthenticationResult(): CheckThreeDSAuthenticationResult
    {
        return $this->checkThreeDSAuthenticationResult;
    }

    /**
     * @param CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult
     */
    public function setCheckThreeDSAuthenticationResult(CheckThreeDSAuthenticationResult $checkThreeDSAuthenticationResult): void
    {
        $this->checkThreeDSAuthenticationResult = $checkThreeDSAuthenticationResult;
    }
}