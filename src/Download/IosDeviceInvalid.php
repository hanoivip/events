<?php

namespace Hanoivip\Events\Download;

class IosDeviceInvalid
{
    public $user;
    public $udid;
    
    public function __construct($user, $udid)
    {
        $this->user = $user;
        $this->udid = $udid;
    }
}