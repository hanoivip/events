<?php

namespace Hanoivip\Events\UserSecure;

class EmailUpdated
{
    public $uid;
    
    public $email;
    
    public function __construct($uid, $email)
    {
        $this->uid = $uid;
        $this->email = $email;
    }
}