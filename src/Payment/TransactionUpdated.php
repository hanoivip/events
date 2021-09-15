<?php

namespace Hanoivip\Events\Payment;

class TransactionUpdated
{
    public $transId;
    
    public function __construct($transId)
    {
        $this->transId = $transId;
    }
}