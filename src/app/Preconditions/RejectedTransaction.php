<?php

namespace App\Preconditions;

class RejectedTransaction extends BasePrecondition
{
    public function __construct()
    {
        parent::__construct();

        $this->amount = '51.03';
    }
}
