<?php

namespace YllyClicAndPay\Model;

use YllyClicAndPay\Model\Request\Card;
use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Customer;
use YllyClicAndPay\Model\Request\Order;
use YllyClicAndPay\Model\Request\ShoppingCart;
use YllyClicAndPay\Model\Request\Tech;
use YllyClicAndPay\Model\Request\ThreeDS;
use YllyClicAndPay\Model\Request\Payment as PaymentRequest;

class CreatePayment
{
    /**
     * @var Common
     */
    private $commonRequest;

    /**
     * @var ThreeDS
     */
    private $threeDSRequest;

    /**
     * @var PaymentRequest
     */
    private $paymentRequest;

    /**
     * @var Order
     */
    private $orderRequest;

    /**
     * @var Card
     */
    private $cardRequest;

    /**
     * @var Customer
     */
    private $customerRequest;

    /**
     * @var Tech
     */
    private $techRequest;

    /**
     * @var ShoppingCart
     */
    private $shoppingCartRequest;

    /**
     * @return Common
     */
    public function getCommonRequest()
    {
        return $this->commonRequest;
    }

    /**
     * @param Common $commonRequest
     */
    public function setCommonRequest($commonRequest)
    {
        $this->commonRequest = $commonRequest;
    }

    /**
     * @return ThreeDS
     */
    public function getThreeDSRequest()
    {
        return $this->threeDSRequest;
    }

    /**
     * @param ThreeDS $threeDSRequest
     */
    public function setThreeDSRequest($threeDSRequest)
    {
        $this->threeDSRequest = $threeDSRequest;
    }

    /**
     * @return PaymentRequest
     */
    public function getPaymentRequest()
    {
        return $this->paymentRequest;
    }

    /**
     * @param PaymentRequest $paymentRequest
     */
    public function setPaymentRequest($paymentRequest)
    {
        $this->paymentRequest = $paymentRequest;
    }

    /**
     * @return Order
     */
    public function getOrderRequest()
    {
        return $this->orderRequest;
    }

    /**
     * @param Order $orderRequest
     */
    public function setOrderRequest($orderRequest)
    {
        $this->orderRequest = $orderRequest;
    }

    /**
     * @return Card
     */
    public function getCardRequest()
    {
        return $this->cardRequest;
    }

    /**
     * @param Card $cardRequest
     */
    public function setCardRequest($cardRequest)
    {
        $this->cardRequest = $cardRequest;
    }

    /**
     * @return Customer
     */
    public function getCustomerRequest()
    {
        return $this->customerRequest;
    }

    /**
     * @param Customer $customerRequest
     */
    public function setCustomerRequest($customerRequest)
    {
        $this->customerRequest = $customerRequest;
    }

    /**
     * @return Tech
     */
    public function getTechRequest()
    {
        return $this->techRequest;
    }

    /**
     * @param Tech $techRequest
     */
    public function setTechRequest($techRequest)
    {
        $this->techRequest = $techRequest;
    }

    /**
     * @return ShoppingCart
     */
    public function getShoppingCartRequest()
    {
        return $this->shoppingCartRequest;
    }

    /**
     * @param ShoppingCart $shoppingCartRequest
     */
    public function setShoppingCartRequest($shoppingCartRequest)
    {
        $this->shoppingCartRequest = $shoppingCartRequest;
    }
}