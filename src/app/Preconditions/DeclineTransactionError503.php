<?php

namespace App\Preconditions;

class DeclineTransactionError503 extends BasePrecondition
{
    public function __construct()
    {
        parent::__construct();

        $this->amount = '5.03';
    }
}
