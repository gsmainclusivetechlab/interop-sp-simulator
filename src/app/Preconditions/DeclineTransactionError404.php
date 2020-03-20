<?php

namespace App\Preconditions;

class DeclineTransactionError404 extends BasePrecondition
{
    public function __construct()
    {
        parent::__construct();

        $this->amount = '4.04';
    }
}
