<?php

namespace Hanoivip\Events\Game;

class UserTransfered
{
    public $fromUser;
    public $toUser;
    
    public function __construct($fromUser, $toUser)
    {
        $this->fromUser = $fromUser;
        $this->toUser = $toUser;
    }
}