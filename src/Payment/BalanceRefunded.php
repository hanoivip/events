<?php

namespace Hanoivip\Events\Payment;

class BalanceRefunded
{
    public $userId;
    
    public $amount;
    
    public $reason;
    
    public function __construct($userId, $amount, $reason)
    {
        $this->userId = $userId;
        $this->amount = $amount;
        $this->reason = $reason;
    }
}