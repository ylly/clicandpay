<?php


namespace YllyClicAndPay;

use DOMDocument;
use DOMXPath;
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
    private $key;
    private $requestId;

    /**
     * @param string $shopId
     * @param string $key
     * @param string $timestamp
     * @param string $mode
     */
    public function __construct($shopId, $key, $timestamp, $mode)
    {
        $this->shopId = $shopId;
        $this->timestamp = $timestamp;
        $this->mode = $mode;
        $this->key = $key;
        $this->requestId = sprintf(
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
        $this->authToken = base64_encode(hash_hmac('sha256', sprintf('%s%s', $this->requestId, $this->timestamp), $key, true));
    }

    /**
     * @param array $options
     * @return SoapClient
     * @throws SoapFault
     */
    public function getClient($options = array('trace' => 1, 'exceptions' => 0, 'encoding' => 'UTF-8', 'soapaction' => ''))
    {
        $client = new SoapClient(self::WSDL_CLIENT, $options);
        $client->__setSoapHeaders($this->createHeaders($this->mode));

        return $client;
    }

    /**
     * @param array $options
     *
     * @return mixed
     * @throws SoapFault
     * @throws Exception
     */
    public function send()
    {
        $dom = new DOMDocument();
        $dom->loadXML($this->getClient()->__getLastResponse(), LIBXML_NOWARNING);
        $path = new DOMXPath($dom);
        $headers = $path->query('//*[local-name()="Header"]/*');
        $responseHeader = array();

        foreach ($headers as $headerItem) {
            $responseHeader[$headerItem->nodeName] = $headerItem->nodeValue;
        }

        $authTokenResponse = base64_encode(hash_hmac('sha256', sprintf('%s%s', $responseHeader['timestamp'], $responseHeader['requestId']), $this->key, true));

        return $authTokenResponse !== $responseHeader['authToken'];
    }

    /**
     * @param string $mode
     * @return array
     */
    public function createHeaders($mode)
    {
        $ns = self::NS_HEADER;
        $headerShopId = new SOAPHeader($ns, 'shopId', $this->shopId);
        $headerRequestId = new SOAPHeader($ns, 'requestId', $this->requestId);
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

    /**
     * @param SoapClient $client
     * @return mixed
     */
    public function setJsessionId($client)
    {
        $cookie = $_SESSION['JSESSIONID'];
        $client->__setCookie('JSESSIONID', $cookie);

        return $cookie;
    }

    /**
     * @param SoapClient $client
     * @return string $jSessionId
     */
    function getJsessionId($client)
    {
        $header = $client->__getLastResponseHeaders();

        if (!preg_match("#JSESSIONID=([A-Za-z0-9\._]+)#", $header, $matches)) {
            return 'Aucun ID de Session Renvoyé.';
        }

        $jSessionId = $matches[1];
        $_SESSION['JSESSIONID'] = $jSessionId;

        return $jSessionId;
    }

    /**
     * @param $threeDsAcsUrl
     * @param $threeDSrequestId
     * @param $threeDsEncodedPareq
     * @param $threeDsServerResponseUrl
     * @return mixed
     */
    public function formConstructor($threeDsAcsUrl, $threeDSrequestId, $threeDsEncodedPareq, $threeDsServerResponseUrl)
    {
        return $this->render('/views/formConstructor.html.twig', [
            'threeDsAcsUrl' => $threeDsAcsUrl,
            'threeDSrequestId' => $threeDSrequestId,
            'threeDsEncodedPareq' => $threeDsEncodedPareq,
            'threeDsServerResponseUrl' => $threeDsServerResponseUrl,
        ]);
    }

}