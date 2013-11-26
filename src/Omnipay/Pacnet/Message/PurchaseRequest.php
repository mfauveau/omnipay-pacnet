<?php

namespace Omnipay\Pacnet\Message;

/**
 * Pacnet Purchase Request
 */
class PurchaseRequest extends AuthorizeRequest
{
    public function getData()
    {
        $data = parent::getData();

        $data['PymtType'] = 'cc_debit';

        $data['Signature'] = $this->generateSignature($data);

        return $data;
    }
}
