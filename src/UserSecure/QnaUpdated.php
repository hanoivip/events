<?php

namespace Hanoivip\Events\UserSecure;

class QnaUpdated
{
    public $uid;
    
    public $qna;
    
    public function __construct($uid, $qna)
    {
        $this->uid = $uid;
        $this->qna = $qna;
    }
}