<?php

namespace YllyClicAndPay\Model\Response;

class Customer
{
    /**
     * @var BillingDetails
     */
    private $billingDetails;

    /**
     * @var ShippingDetails
     */
    private $shippingDetails;

    /**
     * @var ExtraDetails
     */
    private $extraDetails;

    /**
     * @return BillingDetails
     */
    public function getBillingDetails()
    {
        return $this->billingDetails;
    }

    /**
     * @param BillingDetails $billingDetails
     */
    public function setBillingDetails($billingDetails)
    {
        $this->billingDetails = $billingDetails;
    }

    /**
     * @return ShippingDetails
     */
    public function getShippingDetails()
    {
        return $this->shippingDetails;
    }

    /**
     * @param ShippingDetails $shippingDetails
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->shippingDetails = $shippingDetails;
    }

    /**
     * @return ExtraDetails
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * @param ExtraDetails $extraDetails
     */
    public function setExtraDetails($extraDetails)
    {
        $this->extraDetails = $extraDetails;
    }
}