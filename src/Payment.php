<?php


namespace YllyClicAndPay;

use SoapFault;

class Payment extends ClicAndPay
{
    /**
     * @throws SoapFault
     */
    public function createPayment($mode = 'TEST')
    {
        $client = $this->getClient();

        $commonRequest = new commonRequest;
        $commonRequest->paymentSource = 'EC';
        $commonRequest->submissionDate = new DateTime('now', new DateTimeZone('UTC'));

        $threeDSRequest = new threeDSRequest;
        $threeDSRequest->mode = 'ENABLED_CREATE';

        $paymentRequest = new paymentRequest;
        $paymentRequest->amount = '2990';
        $paymentRequest->currency = '978';
        $paymentRequest->manualValidation = '0';

        $orderRequest = new orderRequest;
        $orderRequest->orderId = 'myOrder';
        $cardRequest = new cardRequest;
        $cardRequest->number = '4970100000000000';
        $cardRequest->scheme = 'VISA';
        $cardRequest->expiryMonth = '12';
        $cardRequest->expiryYear = '2023';
        $cardRequest->cardSecurityCode = '123';
        $cardRequest->cardHolderBirthDay = '2008-12-31';

        $customerRequest = new customerRequest;
        $customerRequest->billingDetails = new billingDetailsRequest;
        $customerRequest->billingDetails->email = "test@exemple.com";

        $customerRequest->extraDetails = new extraDetailsRequest;

        $techRequest = new techRequest;

        try {
            $createPaymentRequest = new createPayment;
            $createPaymentRequest->commonRequest = $commonRequest;
            $createPaymentRequest->threeDSRequest = $threeDSRequest;
            $createPaymentRequest->paymentRequest = $paymentRequest;
            $createPaymentRequest->orderRequest = $orderRequest;
            $createPaymentRequest->cardRequest = $cardRequest;
            $createPaymentRequest->customerRequest = $customerRequest;
            $createPaymentRequest->techRequest = $techRequest;
            $createPaymentRequest->commonRequest->submissionDate = $createPaymentRequest->commonRequest->submissionDate->format(dateTime::W3C);
            $createPaymentResponse = new createPaymentResponse();
            $createPaymentResponse = $client->createPayment($createPaymentRequest);
        } catch (SoapFault $fault) {
            trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR}


        if ($this->send()) {
            echo 'Erreur interne rencontrée';
        } else {
            if ($createPaymentResponse->createPaymentResult->commonResponse->responseCode != '0') {
            } else {
                if (isset ($createPaymentResponse->createPaymentResult->commonResponse->transactionStatusLabel)) {
                    switch ($createPaymentResponse->createPaymentResult->commonResponse->transactionStatusLabel) {
                        case 'AUTHORISED':
                            echo 'paiement accepté';
                            break;
                        case 'WAITING_AUTHORISATION':
                            echo 'paiement accepté';
                            break;
                        case 'AUTHORISED_TO_VALIDATE':
                            echo 'paiement accepté';
                            break;
                        case 'WAITING_AUTHORISATION_TO_VALIDATE':
                            echo 'paiement accepté';
                            break;
                        default:
                            echo 'paiement refusé';
                            break;
                    }
                } else {
                    $cookie = $this->getJsessionId($client);

                    $MD = sprintf('%s+%s', $this->setJsessionId($client), $createPaymentResponse->createPaymentResult->threeDSResponse->authenticationRequestData->threeDSRequestId);

                    $threeDsAcsUrl = $createPaymentResponse->createPaymentResult->threeDSResponse->authenticationRequestData->threeDSAcsUrl;
                    $threeDsEncodedPareq = $createPaymentResponse->createPaymentResult->threeDSResponse->authenticationRequestData->threeDSEncodedPareq;
                    $threeDsServerResponseUrl = 'http://127.0.0.1/webservices/ws-v5/retour3DS.php';

                    $JSESSIONID = $this->setJsessionId($client);
                    if ($mode === 'TEST') {
                        $threeDsAcsUrl = sprintf('%s;jsessionid=%s', $threeDsAcsUrl, $JSESSIONID);
                    }

                }
            }
        }
    }

    /**
     * @throws SoapFault
     */
    public function findPayment()
    {
        $client = $this->getClient();

        //Génération du body
        $queryRequest = new queryRequest;
        $queryRequest->orderId = 'myOrder';

        try {
            $findPaymentsRequest = new findPayments;
            $findPaymentsRequest->queryRequest = $queryRequest;

            $findPaymentsResponse = $client->findPayments($findPaymentsRequest);
        } catch (SoapFault $fault) {
            trigger_error("SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})", E_USER_ERROR);
        }

        if ($this->send()) {
            echo 'Erreur interne rencontrée';
        } else {
            if ($findPaymentsResponse->findPaymentsResult->commonResponse->responseCode != '0') {
            } else {
                if (isset ($findPaymentsResponse->findPaymentsResult->commonResponse->transactionStatusLabel)) {
                    //la carte est non enrôlée ou 3DS Désactivé

                    // Le paiement est accepté
                    switch ($findPaymentsResponse->findPaymentsResult->commonResponse->transactionStatusLabel) {
                        case 'AUTHORISED':
                            echo 'paiement accepté';
                            break;
                        case 'WAITING_AUTORISATION':
                            echo 'paiement accepté';
                            break;
                        case 'AUTHORISED_TO_VALIDATE':
                            echo 'paiement accepté';
                            break;
                        case 'WAITING_AUTORISATION_TO_VALIDATE':
                            echo 'paiement accepté';
                            break;
                        default:
                            echo 'paiement refusé';
                            break;
                    }
                } else {
                    $cookie = getJsessionId($client);
                }
            }
        }
    }
}


