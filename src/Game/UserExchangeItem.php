<?php

namespace Hanoivip\Events\Game;

class UserExchangeItem
{
    public $user;
    public $server;
    public $itemId;
    public $itemCount;
    public $params;
    
    public function __construct($user, $server, $itemId, $itemCount, $params)
    {
        $this->user = $user;
        $this->server = $server;
        $this->itemId = $itemId;
        $this->itemCount = $itemCount;
        $this->params = $params;
    }
}