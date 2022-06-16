<?php

namespace Hanoivip\Events\Game;

class UserBuyItem
{
    public $user;
    public $server;
    public $item;
    public $role;
    
    public function __construct($user, $server, $item, $role)
    {
        $this->user = $user;
        $this->server = $server;
        $this->item = $item;
        $this->role = $role;
    }
}