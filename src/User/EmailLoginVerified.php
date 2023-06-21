<?php

namespace Hanoivip\Events\User;

class EmailLoginVerified
{
    public $uid;
    
    public $email;
    
    public function __construct($uid, $email)
    {
        $this->uid = $uid;
        $this->email = $email;
    }
}