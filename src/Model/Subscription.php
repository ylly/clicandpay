<?php


namespace YllyClicAndPay\Model;

use DOMDocument;
use DOMXPath;
use SoapFault;

class Subscription extends ClicAndPay
{
    /**
     * @throws SoapFault
     */
    public function createSubscription($mode = 'TEST')
    {
        $client = $this->getClient();

        $commonRequest = new commonRequest;
        $commonRequest->submissionDate = new DateTime('now', new DateTimeZone('UTC'));
        $orderRequest = new orderRequest;
        $orderRequest->orderId = 'myFirstSubscription';
        $subscriptionRequest = new subscriptionRequest;
        $subscriptionRequest->effectDate = '2016-07-10T18:00:00Z';
        $subscriptionRequest->amount = '30000';
        $subscriptionRequest->currency = '978';
        $subscriptionRequest->initialAmount = '1000';
        $subscriptionRequest->initialAmountNumber = '1';

        $subscriptionRequest->rrule = 'RRULE:FREQ=MONTHLY;COUNT=12;BYMONTHDAY=10';

        $cardRequest = new cardRequest;
        $cardRequest->paymentToken = 'MyToken';

        try {
            $createSubscriptionRequest = new createSubscription;
            $createSubscriptionRequest->commonRequest = $commonRequest;
            $createSubscriptionRequest->orderRequest = $orderRequest;
            $createSubscriptionRequest->cardRequest = $cardRequest;
            $createSubscriptionRequest->subscriptionRequest = $subscriptionRequest;
            $createSubscriptionRequest->commonRequest->submissionDate = $createSubscriptionRequest->commonRequest->submissionDate->format(dateTime::W3C);

            $createSubscriptionResponse = $client->createSubscription($createSubscriptionRequest);
        } catch (SoapFault $fault) {
            trigger_error(sprintf('SOAP Fault: (faultcode: %s, faultstring: %s)', $fault->faultcode, $fault->faultstring), E_USER_ERROR);
        }

        if ($this->send()) {
            echo 'Erreur interne rencontrée';
        } else {
            if ($createSubscriptionResponse->createSubscriptionResult->commonResponse->responseCode != '0') {
            } else {
                if (isset ($createSubscriptionResponse->createSubscriptionResult->commonResponse->transactionStatusLabel)) {
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
                }
            }
        }
    }

    /**
     * @throws SoapFault
     */
    public function cancelSubscription()
    {
        $client = $this->getClient();

        $commonRequest = new commonRequest;
        $queryRequest = new queryRequest;
        $queryRequest->paymentToken = 'c975d6af1d5e478da3570d43494d86d2';
        $queryRequest->submissionDate = '2015-08-28T09:21:34+00:00';
        $queryRequest->subscriptionId = '20150828i6VFSA';

        try {
            $cancelSubscriptionRequest = new cancelSubscription;
            $cancelSubscriptionRequest->commonRequest = $commonRequest;
            $cancelSubscriptionRequest->queryRequest = $queryRequest;
            $cancelSubscriptionResponse = $client->cancelSubscription($cancelSubscriptionRequest);
        } catch (SoapFault $fault) {
            trigger_error(sprintf('SOAP Fault: (faultcode: %s, faultstring: %s)', $fault->faultcode, $fault->faultstring), E_USER_ERROR);
        }

        if ($this->send()) {
            echo 'Erreur interne rencontrée';
        } else {
            if ($cancelSubscriptionResponse->cancelSubscriptionResult->commonResponse->responseCode != '0') {
            } else {
                if (isset ($cancelSubscriptionResponse->cancelSubscriptionResult->commonResponse->transactionStatusLabel)) {

                    switch ($cancelSubscriptionResponse->cancelSubscriptionResult->commonResponse->transactionStatusLabel) {
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
                }
            }
        }
    }
}