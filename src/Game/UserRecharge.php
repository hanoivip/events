<?php

namespace Hanoivip\Events\Game;

// User recharge with money
class UserRecharge
{
    public $uid;
    
    public $cointype;
    
    public $coin;
    
    public $svname;
    
    public $params;
    
    public function __construct($uid, $cointype, $coin, $svname, $params)
    {
        $this->uid = $uid;
        $this->cointype = $cointype;
        $this->coin = $coin;
        $this->svname = $svname;
        $this->params = $params;
    }
}