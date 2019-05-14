<?php


namespace YllyClicAndPay\Model\Response;


use YllyClicAndPay\Model\Result\UpdateToken;

class UpdateTokenResponse
{
    /**
     * @var UpdateToken
     */
    public $updateTokenResult;

    /**
     * @return UpdateToken
     */
    public function getUpdateTokenResult(): UpdateToken
    {
        return $this->updateTokenResult;
    }

    /**
     * @param UpdateToken $updateTokenResult
     */
    public function setUpdateTokenResult(UpdateToken $updateTokenResult): void
    {
        $this->updateTokenResult = $updateTokenResult;
    }
}