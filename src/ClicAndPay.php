<?php


namespace YllyClicAndPay;

use DateTime;
use SoapClient;
use SoapFault;
use SoapHeader;

class ClicAndPay
{
    const WSDL_CLIENT = 'https://clicandpay.groupecdn.fr/vads-ws/v5?wsdl';
    const NS_HEADER = 'http://v5.ws.vads.lyra.com/Header/';
    const MODE_PROD = 'PRODUCTION';
    const MODE_TEST = 'TEST';

    private $shopId;
    private $requestId;
    private $timestamp;
    private $mode;
    private $authToken;

    /**
     * @param int $shopId
     * @param $requestId
     * @param $timestamp
     * @param $mode
     * @param $authToken
     */
    public function __construct($shopId, $requestId, $timestamp, $mode, $authToken)
    {
        $this->shopId = $shopId;
        $this->requestId = $requestId;
        $this->timestamp = $timestamp;
        $this->mode = $mode;
        $this->authToken = $authToken;
    }


    public function generationUuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

    public function authToken($generationUuid, $timestamp)
    {
        return base64_encode(hash_hmac('sha256', sprintf('%s%s', $generationUuid, $timestamp), true));
    }

    /**
     * @param string $wsdl
     * @param array $options
     *
     * @return mixed
     * @throws SoapFault
     */
    public function send($wsdl, $options = array('trace' => 1, 'exceptions' => 0, 'encoding' => 'UTF-8', 'soapaction' => ''))
    {
        $client = new SoapClient($wsdl, $options);
        $authToken = $this->authToken($this->generationUuid(), new DateTime('Y-m-d\TH:i:s\Z'));
        $client->__setSoapHeaders($this->createHeaders($this->shopId, $this->mode, $authToken));

        return $client;
    }

    /**
     * @param $shopId
     * @param $mode
     * @param $authToken
     * @return mixed
     * @throws SoapFault
     */
    public function createHeaders($shopId, $mode, $authToken)
    {
        $ns = ClicAndPay::NS_HEADER;
        $requestId = $this->generationUuid();
        $timestamp = new DateTime('Y-m-d\TH:i:s\Z');

        $headerShopId = new SOAPHeader($ns, 'shopId', $shopId);
        $headerRequestId = new SOAPHeader($ns, 'requestId', $requestId);
        $headerTimestamp = new SOAPHeader($ns, 'timestamp', $timestamp);
        $headerMode = new SOAPHeader($ns, 'mode', $mode);
        $headerAuthToken = new SOAPHeader($ns, 'authToken', $authToken);

        return new SoapClient($wsdl, $options);
    }
}