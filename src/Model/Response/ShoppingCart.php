<?php

namespace YllyClicAndPay\Model\Response;

use YllyClicAndPay\CartItemInfo;

class ShoppingCart
{
    /**
     * @var CartItemInfo
     */
    private $cartItemInfo;

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