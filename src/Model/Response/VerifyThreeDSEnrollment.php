<?php


namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\Model\Result\VerifyThreeDSEnrollment as VerifyThreeDSEnrollmentResult;

class VerifyThreeDSEnrollment
{
    /**
     * @var VerifyThreeDSEnrollmentResult
     */
    private $verifyThreeDSEnrollmentResult;

    /**
     * @return VerifyThreeDSEnrollmentResult
     */
    public function getVerifyThreeDSEnrollmentResult()
    {
        return $this->verifyThreeDSEnrollmentResult;
    }

    /**
     * @param VerifyThreeDSEnrollmentResult $verifyThreeDSEnrollmentResult
     */
    public function setVerifyThreeDSEnrollmentResult($verifyThreeDSEnrollmentResult)
    {
        $this->verifyThreeDSEnrollmentResult = $verifyThreeDSEnrollmentResult;
    }
}