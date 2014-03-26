<?php

namespace Omnipay\Pacnet\Message;

/**
 * Pacnet Authorize Request
 */
class AuthorizeRequest extends SubmitRequest
{
    public function getData()
    {
        $data = parent::getData();

        $data['PymtType'] = 'cc_preauth';

        if ( ! $this->getTransactionReference()) {
            $this->validate('card');

            $data['CardBrand'] = $this->getCard()->getBrand();
            $data['CardNumber'] = $this->getCard()->getNumber();
            $data['ExpiryDate'] = $this->getCard()->getExpiryDate('my');

            if ($this->getCard()->getCvv()) {
                $data['CVV2'] = $this->getCard()->getCvv();
            }

            if ($this->getCard()->getName()) {
                $data['AccountName'] = $this->getCard()->getName();
            }
        }
        else {
            $data['TemplateNumber'] = $this->getTransactionReference();
        }

        $data['Signature'] = $this->generateSignature($data);

        return $data;
    }
}
