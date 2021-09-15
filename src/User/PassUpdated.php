<?php

namespace Hanoivip\Events\User;

class PassUpdated
{
    public $uid;
    
    public $username;
    
    public $newpass;
    
    public function __construct($uid, $username, $newpass)
    {
        $this->uid = $uid;
        $this->username = $username;
        $this->newpass = $newpass;
    }
}