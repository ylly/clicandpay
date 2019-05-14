<?php


namespace YllyClicAndPay;

use DateTime;
use SoapFault;
use YllyClicAndPay\Model\CreatePayment;
use YllyClicAndPay\Model\FindPayments;
use YllyClicAndPay\Model\Request\Query;
use YllyClicAndPay\Model\Response\CreatePayment as CreatePaymentResponse;
use YllyClicAndPay\Model\Request\BillingDetails;
use YllyClicAndPay\Model\Request\Card;
use YllyClicAndPay\Model\Request\Customer;
use YllyClicAndPay\Model\Request\ExtraDetails;
use YllyClicAndPay\Model\Request\Order;
use YllyClicAndPay\Model\Request\Payment as PaymentRequest;
use YllyClicAndPay\Model\Request\Common;
use YllyClicAndPay\Model\Request\Tech;
use YllyClicAndPay\Model\Request\ThreeDS;

class Payment extends ClicAndPay
{
    /**
     * @param string $mode
     * @param string $paymentSource
     * @param DateTime $submissionDate
     * @param float $amount
     * @param int $currency
     * @param int $manualValidation
     *
     * @param string $orderId
     * @param string $number
     * @param string $scheme
     * @param int $expiryMonth
     * @param int $expiryYear
     * @param string $cardSecurityCode
     * @param DateTime $cardHolderBirthday
     * @throws SoapFault
     */
    public function createPayment($mode = 'TEST', $paymentSource, $submissionDate, $amount, $currency, $manualValidation = 0, $orderId, $number, $scheme, $expiryMonth, $expiryYear, $cardSecurityCode, $cardHolderBirthday)
    {
        $client = $this->getClient();

        $commonRequest = new Common();
        $commonRequest->setPaymentSource($paymentSource);
        $commonRequest->setSubmissionDate($submissionDate);

        $threeDSRequest = new ThreeDS();
        $threeDSRequest->setMode($mode);

        $paymentRequest = new PaymentRequest();
        $paymentRequest->setAmount($amount);
        $paymentRequest->setCurrency($currency);
        $paymentRequest->setManualValidation($manualValidation);

        $orderRequest = new Order();
        $orderRequest->setOrderId($orderId);

        $cardRequest = new Card();
        $cardRequest->setNumber($number);
        $cardRequest->setScheme($scheme);
        $cardRequest->setExpiryMonth($expiryMonth);
        $cardRequest->setExpiryYear($expiryYear);
        $cardRequest->setCardSecurityCode($cardSecurityCode);
        $cardRequest->setCardHolderBirthDay($cardHolderBirthday);

        $customerRequest = new Customer();
        $customerRequest->setBillingDetails(new BillingDetails());
        $customerRequest->getBillingDetails()->setEmail('test@exemple.com');
        $customerRequest->setExtraDetails(new ExtraDetails());

        $techRequest = new Tech();

        try {
            $createPaymentRequest = new CreatePayment();
            $createPaymentRequest->setCardRequest($cardRequest);
            $createPaymentRequest->setCommonRequest($commonRequest);
            $createPaymentRequest->setCustomerRequest($customerRequest);
            $createPaymentRequest->setOrderRequest($orderRequest);
            $createPaymentRequest->setPaymentRequest($paymentRequest);
            $createPaymentRequest->setTechRequest($techRequest);
            $createPaymentRequest->setThreeDSRequest($threeDSRequest);
            $createPaymentRequest->getCommonRequest()->setSubmissionDate($createPaymentRequest->getCommonRequest()->getSubmissionDate()->format(DateTime::W3C));

            $createPaymentResponse = new CreatePaymentResponse();
            $createPaymentResponse->setCreatePaymentResult($client->createPayment($createPaymentRequest));
        } catch (SoapFault $fault) {
            trigger_error(sprintf('SOAP Fault: (faultcode: %s, faultstring: %s)', $fault->faultcode, $fault->faultstring), E_USER_ERROR);
        }


        if ($this->send()) {
            echo 'Erreur interne rencontrée';
        } else if ($createPaymentResponse->getCreatePaymentResult()->getCommonResponse()->getResponseCode() === '0') {
            switch ($createPaymentResponse->getCreatePaymentResult()->getCommonResponse()->getTransactionStatusLabel()) {
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

            $MD = sprintf('%s+%s', $this->setJsessionId($client), $createPaymentResponse->getCreatePaymentResult()->getThreeDSResponse()->getAuthenticationRequestData()->getThreeDSRequestId());

            $threeDsAcsUrl = $createPaymentResponse->getCreatePaymentResult()->getThreeDSResponse()->getAuthenticationRequestData()->getThreeDSAcsUrl();
            $threeDsEncodedPareq = $createPaymentResponse->getCreatePaymentResult()->getThreeDSResponse()->getAuthenticationRequestData()->getThreeDSEncodedPareq();
            $threeDsServerResponseUrl = 'http://127.0.0.1/webservices/ws-v5/retour3DS.php';

            $JSESSIONID = $this->setJsessionId($client);
            if ($mode === 'TEST') {
                $threeDsAcsUrl = sprintf('%s;jsessionid=%s', $threeDsAcsUrl, $JSESSIONID);
            }

        }
    }

    /**
     * @throws SoapFault
     */
    public function findPayment()
    {
        $client = $this->getClient();

        $queryRequest = new Query();
        $queryRequest->setOrderId('myOrder');

        try {
            $findPaymentsRequest = new FindPayments();
            $findPaymentsRequest->setQueryRequest($queryRequest);

            $findPaymentsResponse = $client->findPayments($findPaymentsRequest);
        } catch (SoapFault $fault) {
            trigger_error(sprintf('SOAP Fault: (faultcode: %s, faultstring: %s)', $fault->faultcode, $fault->faultstring), E_USER_ERROR);
        }

        if ($this->send()) {
            echo 'Erreur interne rencontrée';
        } else if ($findPaymentsResponse->getFindPaymentsResult()->getCommonResponse()->getResponseCode() === '0') {
            if (isset ($findPaymentsResponse->getFindPaymentsResult()->getCommonResponse()->getTransactionStatusLabel())) {
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
                $cookie = $this->getJsessionId($client);
            }
        }
    }
}


