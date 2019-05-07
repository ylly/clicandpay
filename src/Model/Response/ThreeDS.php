<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Data\AuthenticationRequest;
use YllyClicAndPay\Model\Data\AuthenticationResult;

class ThreeDS
{
    /**
     * @var AuthenticationRequest
     */
    private $authenticationRequestData;

    /**
     * @var AuthenticationResult
     */
    private $authenticationResultData;

    /**
     * @return AuthenticationRequest
     */
    public function getAuthenticationRequestData()
    {
        return $this->authenticationRequestData;
    }

    /**
     * @param AuthenticationRequest $authenticationRequestData
     */
    public function setAuthenticationRequestData($authenticationRequestData)
    {
        $this->authenticationRequestData = $authenticationRequestData;
    }

    /**
     * @return AuthenticationResult
     */
    public function getAuthenticationResultData()
    {
        return $this->authenticationResultData;
    }

    /**
     * @param AuthenticationResult $authenticationResultData
     */
    public function setAuthenticationResultData($authenticationResultData)
    {
        $this->authenticationResultData = $authenticationResultData;
    }
}