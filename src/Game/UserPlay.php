<?php

namespace Hanoivip\Events\Game;

class UserPlay
{
    public $uid;
    
    public $svname;
    
    public function __construct($uid, $svname)
    {
        $this->uid = $uid;
        $this->svname = $svname;
    }
}