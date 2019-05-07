<?php

namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\CreateTokenResult;

class CreateToken
{
    /**
     * @var CreateTokenResult
     */
    private $createTokenResult;

    /**
     * @return CreateTokenResult
     */
    public function getCreateTokenResult()
    {
        return $this->createTokenResult;
    }

    /**
     * @param CreateTokenResult $createTokenResult
     */
    public function setCreateTokenResult($createTokenResult)
    {
        $this->createTokenResult = $createTokenResult;
    }
}