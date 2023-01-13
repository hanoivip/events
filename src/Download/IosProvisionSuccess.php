<?php

namespace Hanoivip\Events\Download;

class IosProvisionSuccess
{
    public $user;
    public $udid;
    
    public function __construct($user, $udid)
    {
        $this->user = $user;
        $this->udid = $udid;
    }
}