<?php

namespace App\Preconditions;

class DeclineTransactionError500 extends BasePrecondition
{
    public function __construct()
    {
        parent::__construct();

        $this->amount = '5';
    }
}
