<?php


namespace YllyClicAndPay\Model\Request;


use DateTime;

class Payment
{
    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var int
     */
    private $currency;

    /**
     * @var datetime
     */
    private $expectedCaptureDate;

    /**
     * @var int
     */
    private $manualValidation;

    /**
     * @var string
     */
    private $paymentOptionCode;

    /**
     * @var string
     */
    private $retryUuid;

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     */
    public function setTransactionId(string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getCurrency(): int
    {
        return $this->currency;
    }

    /**
     * @param int $currency
     */
    public function setCurrency(int $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return DateTime
     */
    public function getExpectedCaptureDate(): DateTime
    {
        return $this->expectedCaptureDate;
    }

    /**
     * @param DateTime $expectedCaptureDate
     */
    public function setExpectedCaptureDate(DateTime $expectedCaptureDate): void
    {
        $this->expectedCaptureDate = $expectedCaptureDate;
    }

    /**
     * @return int
     */
    public function getManualValidation(): int
    {
        return $this->manualValidation;
    }

    /**
     * @param int $manualValidation
     */
    public function setManualValidation(int $manualValidation): void
    {
        $this->manualValidation = $manualValidation;
    }

    /**
     * @return string
     */
    public function getPaymentOptionCode(): string
    {
        return $this->paymentOptionCode;
    }

    /**
     * @param string $paymentOptionCode
     */
    public function setPaymentOptionCode(string $paymentOptionCode): void
    {
        $this->paymentOptionCode = $paymentOptionCode;
    }

    /**
     * @return string
     */
    public function getRetryUuid(): string
    {
        return $this->retryUuid;
    }

    /**
     * @param string $retryUuid
     */
    public function setRetryUuid(string $retryUuid): void
    {
        $this->retryUuid = $retryUuid;
    }
}