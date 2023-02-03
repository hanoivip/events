<?php

namespace Hanoivip\Events\User;
/**
 * 
 * @author GameOH
 * @deprecated use Illuminate\Auth\Events instead
 */
class UserLoggedIn
{
    public $uid;
    
    public function __construct($uid)
    {
        $this->uid = $uid;
    }
}