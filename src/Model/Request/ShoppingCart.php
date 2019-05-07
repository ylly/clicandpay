<?php

namespace YllyClicAndPay\Model\Request;

class ShoppingCart
{
    /**
     * @var int
     */
    private $insuranceNumber;
    /**
     * @var int
     */
    private $shippingAmount;
    /**
     * @var int
     */
    private $taxAmount;
    /**
     * @var CartItemInfo
     */
    private $cartItemInfo;

    /**
     * @return int
     */
    public function getInsuranceNumber()
    {
        return $this->insuranceNumber;
    }

    /**
     * @param int $insuranceNumber
     */
    public function setInsuranceNumber($insuranceNumber)
    {
        $this->insuranceNumber = $insuranceNumber;
    }

    /**
     * @return int
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * @param int $shippingAmount
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->shippingAmount = $shippingAmount;
    }

    /**
     * @return int
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @param int $taxAmount
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * @return CartItemInfo
     */
    public function getCartItemInfo()
    {
        return $this->cartItemInfo;
    }

    /**
     * @param CartItemInfo $cartItemInfo
     */
    public function setCartItemInfo($cartItemInfo)
    {
        $this->cartItemInfo = $cartItemInfo;
    }
}