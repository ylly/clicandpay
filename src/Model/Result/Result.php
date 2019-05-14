<?php

namespace YllyClicAndPay\Model\Result;

use YllyClicAndPay\Model\Response\Authorization;
use YllyClicAndPay\Model\Response\Capture;
use YllyClicAndPay\Model\Response\Card;
use YllyClicAndPay\Model\Response\Customer;
use YllyClicAndPay\Model\Response\Extra;
use YllyClicAndPay\Model\Response\FraudManagement;
use YllyClicAndPay\Model\Response\Mark;
use YllyClicAndPay\Model\Response\Order;
use YllyClicAndPay\Model\Response\Payment as PaymentResponse;
use YllyClicAndPay\Model\Response\Subscription as SubscriptionResponse;
use YllyClicAndPay\Model\Response\ThreeDS;

class Result
{
    /**
     * @var PaymentResponse
     */
    private $paymentResponse;

    /**
     * @var Order
     */
    private $orderResponse;

    /**
     * @var Card
     */
    private $cardResponse;

    /**
     * @var Authorization
     */
    private $authorizationResponse;

    /**
     * @var Capture
     */
    private $captureResponse;

    /**
     * @var Customer
     */
    private $customerResponse;

    /**
     * @var Mark
     */
    private $markResponse;

    /**
     * @var Extra
     */
    private $extraResponse;

    /**
     * @var FraudManagement
     */
    private $fraudManagementResponse;

    /**
     * @var ThreeDS
     */
    private $threeDSResponse;


    /**
     * @return PaymentResponse
     */
    public function getPaymentResponse()
    {
        return $this->paymentResponse;
    }

    /**
     * @param PaymentResponse $paymentResponse
     */
    public function setPaymentResponse($paymentResponse)
    {
        $this->paymentResponse = $paymentResponse;
    }

    /**
     * @return Order
     */
    public function getOrderResponse()
    {
        return $this->orderResponse;
    }

    /**
     * @param Order $orderResponse
     */
    public function setOrderResponse($orderResponse)
    {
        $this->orderResponse = $orderResponse;
    }

    /**
     * @return Card
     */
    public function getCardResponse()
    {
        return $this->cardResponse;
    }

    /**
     * @param Card $cardResponse
     */
    public function setCardResponse($cardResponse)
    {
        $this->cardResponse = $cardResponse;
    }

    /**
     * @return Authorization
     */
    public function getAuthorizationResponse()
    {
        return $this->authorizationResponse;
    }

    /**
     * @param Authorization $authorizationResponse
     */
    public function setAuthorizationResponse($authorizationResponse)
    {
        $this->authorizationResponse = $authorizationResponse;
    }

    /**
     * @return Capture
     */
    public function getCaptureResponse()
    {
        return $this->captureResponse;
    }

    /**
     * @param Capture $captureResponse
     */
    public function setCaptureResponse($captureResponse)
    {
        $this->captureResponse = $captureResponse;
    }

    /**
     * @return Customer
     */
    public function getCustomerResponse()
    {
        return $this->customerResponse;
    }

    /**
     * @param Customer $customerResponse
     */
    public function setCustomerResponse($customerResponse)
    {
        $this->customerResponse = $customerResponse;
    }

    /**
     * @return Mark
     */
    public function getMarkResponse()
    {
        return $this->markResponse;
    }

    /**
     * @param Mark $markResponse
     */
    public function setMarkResponse($markResponse)
    {
        $this->markResponse = $markResponse;
    }

    /**
     * @return Extra
     */
    public function getExtraResponse()
    {
        return $this->extraResponse;
    }

    /**
     * @param Extra $extraResponse
     */
    public function setExtraResponse($extraResponse)
    {
        $this->extraResponse = $extraResponse;
    }

    /**
     * @return FraudManagement
     */
    public function getFraudManagementResponse()
    {
        return $this->fraudManagementResponse;
    }

    /**
     * @param FraudManagement $fraudManagementResponse
     */
    public function setFraudManagementResponse($fraudManagementResponse)
    {
        $this->fraudManagementResponse = $fraudManagementResponse;
    }

    /**
     * @return ThreeDS
     */
    public function getThreeDSResponse()
    {
        return $this->threeDSResponse;
    }

    /**
     * @param ThreeDS $threeDSResponse
     */
    public function setThreeDSResponse($threeDSResponse)
    {
        $this->threeDSResponse = $threeDSResponse;
    }
}