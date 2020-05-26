<?php

namespace App\Preconditions;

class DeclineTransactionError400 extends BasePrecondition
{
    public function __construct()
    {
        parent::__construct();

        $this->amount = '4';
    }
}
