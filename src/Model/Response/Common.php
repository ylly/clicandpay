<?php

namespace YllyClicAndPay\Model\Response;

use DateTime;

class Common
{

    /**
     * @var int
     */
    private $responseCode;

    /**
     * @var string
     */
    private $responseCodeDetail;

    /**
     * @var string
     */
    private $transactionStatusLabel;

    /**
     * @var string
     */
    private $shopId;

    /**
     * @var string
     */
    private $paymentSource;

    /**
     * @var datetime
     */
    private $submissionDate;

    /**
     * @var string
     */
    private $contractNumber;

    /**
     * @var string
     */
    private $paymentToken;

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @param int $responseCode
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    /**
     * @return string
     */
    public function getResponseCodeDetail()
    {
        return $this->responseCodeDetail;
    }

    /**
     * @param string $responseCodeDetail
     */
    public function setResponseCodeDetail($responseCodeDetail)
    {
        $this->responseCodeDetail = $responseCodeDetail;
    }

    /**
     * @return string
     */
    public function getTransactionStatusLabel()
    {
        return $this->transactionStatusLabel;
    }

    /**
     * @param string $transactionStatusLabel
     */
    public function setTransactionStatusLabel($transactionStatusLabel)
    {
        $this->transactionStatusLabel = $transactionStatusLabel;
    }

    /**
     * @return string
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param string $shopId
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;
    }

    /**
     * @return string
     */
    public function getPaymentSource()
    {
        return $this->paymentSource;
    }

    /**
     * @param string $paymentSource
     */
    public function setPaymentSource($paymentSource)
    {
        $this->paymentSource = $paymentSource;
    }

    /**
     * @return DateTime
     */
    public function getSubmissionDate()
    {
        return $this->submissionDate;
    }

    /**
     * @param DateTime $submissionDate
     */
    public function setSubmissionDate($submissionDate)
    {
        $this->submissionDate = $submissionDate;
    }

    /**
     * @return string
     */
    public function getContractNumber()
    {
        return $this->contractNumber;
    }

    /**
     * @param string $contractNumber
     */
    public function setContractNumber($contractNumber)
    {
        $this->contractNumber = $contractNumber;
    }

    /**
     * @return string
     */
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }

    /**
     * @param string $paymentToken
     */
    public function setPaymentToken($paymentToken)
    {
        $this->paymentToken = $paymentToken;
    }
}