<?php

namespace Hanoivip\Events\Gate;

class UserTopup
{
    public $uid;
    
    public $type;
    
    public $coin;
    
    public $mapping;
    
    public function __construct($uid, $type, $coin, $mapping)
    {
        $this->uid = $uid;
        $this->type = $type;
        $this->coin = $coin;
        $this->mapping = $mapping;
    }
}