<?php

namespace Hanoivip\Events\UserSecure;

class Pass2Updated
{
    public $uid;
    
    public $pass2;
    
    public function __construct($uid, $pass2)
    {
        $this->uid = $uid;
        $this->pass2 = $pass2;
    }
}