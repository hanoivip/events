<?php

namespace Hanoivip\Events\User;

class UserCreated
{
    public $uid;
    
    public function __construct($uid)
    {
    }
}