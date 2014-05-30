<?php

namespace Omnipay\Redsys\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Redsys Response
 */
class PurchaseResponse extends AbstractResponse
{
    public function isSuccessful()
    {
        return false;
    }

    public function isRedirect()
    {
        return true;
    }

    public function getRedirectUrl() {
        return $this->request->getEndpoint();
    }

    public function getRedirectData() {
        return $this->getData();
    }
}
