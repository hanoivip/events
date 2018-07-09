<?php

namespace Hanoivip\Events\Gift;

class TicketReceived
{
    // User Id
    public $uid;
    // Ticket ID
    public $tid;
    // Ticket count
    public $count;
    
    public function __construct($uid, $tid, $count)
    {
        $this->uid = $uid;
        $this->tid = $tid;
        $this->count = $count;
    }
}