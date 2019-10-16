<?php

namespace Hanoivip\Events\Gate;

class UserFirstTopup
{
    public $uid;
    
    public $coin;
    
    public function __construct($uid, $coin)
    {
        $this->uid = $uid;
        $this->coin = $coin;
    }
}