<?php

namespace Hanoivip\Events\Server;

class ServerCreated
{
    public $record;
    
    public function __construct($record)
    {
        $this->record = $record;
    }
}