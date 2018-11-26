<?php

namespace Hanoivip\Events;

class UserLogin
{
    public $uid;
    public function __construct($uid)
    {
        $this->uid = $uid;
    }
}