<?php

namespace Omnipay\Pacnet\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

/**
 * Pacnet Response
 */
class Response extends AbstractResponse
{
    public function __construct(RequestInterface $request, $data)
    {
        $this->request = $request;
        parse_str($data, $this->data);
    }

    public function isSuccessful()
    {
        if (isset($this->data['Status']) && $this->data['Status'] === 'Voided') {
            return $this->data['ErrorCode'] === '';
        } else {
            return isset($this->data['Status']) && in_array($this->data['Status'], array(
                'Approved',
                'Submitted',
                'InProgress'
            ));
        }
    }

    public function getCode()
    {
        return (
            isset($this->data['ErrorCode']) &&
            $this->data['ErrorCode'] != ''
        ) ? $this->data['ErrorCode'] : null;
    }

    public function getMessage()
    {
        return (
            isset($this->data['Message']) &&
            $this->data['Message'] !== ''
        ) ? $this->data['Message'] : null;
    }

    public function getTransactionReference()
    {
        return (
            isset($this->data['TrackingNumber']) &&
            $this->data['TrackingNumber'] !== ''
        ) ? $this->data['TrackingNumber'] : null;
    }
}
