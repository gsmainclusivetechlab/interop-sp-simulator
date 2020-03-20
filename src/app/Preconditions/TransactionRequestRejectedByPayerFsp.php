<?php

namespace App\Preconditions;

class TransactionRequestRejectedByPayerFsp extends BasePrecondition
{
    public function __construct()
    {
        parent::__construct();

        $this->amount = '10.1';
    }
}
