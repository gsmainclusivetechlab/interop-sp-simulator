<?php

namespace App\Preconditions;

class QuoteRejectedByMmo1 extends BasePrecondition
{
    public function __construct()
    {
        parent::__construct();

        $this->amount = '10.1';
    }
}
