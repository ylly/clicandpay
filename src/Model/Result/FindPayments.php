<?php


namespace YllyClicAndPay\Model\Result;


use YllyClicAndPay\Model\Response\Common;
use YllyClicAndPay\Model\Response\Order;
use YllyClicAndPay\Model\TransactionItem;

class FindPayments
{
    /**
     * @var Common
     */
    private $commonResponse;

    /**
     * @var Order
     */
    private $orderResponse;

    /**
     * @var TransactionItem
     */
    private $transactionItem;

    /**
     * @return Common
     */
    public function getCommonResponse()
    {
        return $this->commonResponse;
    }

    /**
     * @param Common $commonResponse
     */
    public function setCommonResponse($commonResponse)
    {
        $this->commonResponse = $commonResponse;
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
     * @return TransactionItem
     */
    public function getTransactionItem()
    {
        return $this->transactionItem;
    }

    /**
     * @param TransactionItem $transactionItem
     */
    public function setTransactionItem($transactionItem)
    {
        $this->transactionItem = $transactionItem;
    }
}