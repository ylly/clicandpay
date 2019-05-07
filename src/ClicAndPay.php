<?php


namespace YllyClicAndPay;

use Exception;
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
    private $timestamp;
    private $mode;
    private $authToken;
    private $generationUuid;

    /**
     * @param int $shopId
     * @param $timestamp
     * @param $mode
     */
    public function __construct($shopId, $timestamp, $mode)
    {
        $this->shopId = $shopId;
        $this->timestamp = $timestamp;
        $this->mode = $mode;
        $this->generationUuid = sprintf(
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
        $this->authToken = base64_encode(hash_hmac('sha256', sprintf('%s%s', $this->generationUuid, $this->timestamp), true));
    }


    /**
     * @param string $wsdl
     * @param array $options
     *
     * @return mixed
     * @throws SoapFault
     * @throws Exception
     */
    public function send($wsdl, $options = array('trace' => 1, 'exceptions' => 0, 'encoding' => 'UTF-8', 'soapaction' => ''))
    {
        $client = new SoapClient($wsdl, $options);
        $client->__setSoapHeaders($this->createHeaders($this->mode));

        return $client;
    }

    /**
     * @param int $shopId
     * @param string $mode
     * @param string $authToken
     * @return mixed
     * @throws Exception
     */
    public function createHeaders($mode)
    {
        $ns = self::NS_HEADER;
//        $timestamp = new DateTime('Y-m-d\TH:i:s\Z');

        $headerShopId = new SOAPHeader($ns, 'shopId', $this->shopId);
        $headerRequestId = new SOAPHeader($ns, 'requestId', $this->generationUuid);
        $headerTimestamp = new SOAPHeader($ns, 'timestamp', $this->timestamp);
        $headerMode = new SOAPHeader($ns, 'mode', $mode);
        $headerAuthToken = new SOAPHeader($ns, 'authToken', $this->authToken);

        return array(
            $headerShopId,
            $headerRequestId,
            $headerTimestamp,
            $headerMode,
            $headerAuthToken
        );
    }

    public function checkAuthToken(){
        $responseToken = base64_encode(hash_hmac('sha256', sprintf('%s%s', $this->timestamp, $this->generationUuid), true));

        return $this->authToken === $responseToken;
    }
}