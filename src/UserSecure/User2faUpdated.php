<?php

namespace Hanoivip\Events\UserSecure;

class User2faUpdated
{
    public $uid;
    
    public $method;
    
    public function __construct($uid, $method)
    {
        $this->uid = $uid;
        $this->method = $method;
    }
}