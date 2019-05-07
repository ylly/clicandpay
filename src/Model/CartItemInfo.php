<?php


namespace YllyClicAndPay\Model;


class CartItemInfo
{
    /**
     * @var string
     */
    private $productLabel;
    /**
     * @var ProductType
     */
    private $productType;
    /**
     * @var string
     */
    private $productRef;
    /**
     * @var int
     */
    private $productQty;
    /**
     * @var string
     */
    private $productAmount;
    /**
     * @var string
     */
    private $productVat;

    /**
     * @return string
     */
    public function getProductLabel()
    {
        return $this->productLabel;
    }

    /**
     * @param string $productLabel
     */
    public function setProductLabel($productLabel)
    {
        $this->productLabel = $productLabel;
    }

    /**
     * @return ProductType
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @param ProductType $productType
     */
    public function setProductType($productType)
    {
        $this->productType = $productType;
    }

    /**
     * @return string
     */
    public function getProductRef()
    {
        return $this->productRef;
    }

    /**
     * @param string $productRef
     */
    public function setProductRef($productRef)
    {
        $this->productRef = $productRef;
    }

    /**
     * @return int
     */
    public function getProductQty()
    {
        return $this->productQty;
    }

    /**
     * @param int $productQty
     */
    public function setProductQty($productQty)
    {
        $this->productQty = $productQty;
    }

    /**
     * @return string
     */
    public function getProductAmount()
    {
        return $this->productAmount;
    }

    /**
     * @param string $productAmount
     */
    public function setProductAmount($productAmount)
    {
        $this->productAmount = $productAmount;
    }

    /**
     * @return string
     */
    public function getProductVat()
    {
        return $this->productVat;
    }

    /**
     * @param string $productVat
     */
    public function setProductVat($productVat)
    {
        $this->productVat = $productVat;
    }
}