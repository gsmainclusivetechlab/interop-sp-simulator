<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Preconditions\Factory;

class PreconditionsTest extends TestCase
{
    /**
     * Base precondition amount check
     *
     * @return void
     */
    public function testAuthorizedTransaction()
    {
        $precondition = Factory::instance('AuthorizedTransaction');

        $testdata = $precondition->getData();

        $this->assertTrue($testdata['amount'] == 100);
    }

    /**
     * Error 400 amount check
     *
     * @return void
     *
     **/
    public function testDeclineTransactionError400()
    {
        $precondition = Factory::instance('DeclineTransactionError400');

        $testdata = $precondition->getData();

        $this->assertTrue($testdata['amount'] == 4);
    }

    /**
     * Error 401 amount check
     *
     * @return void
     */
    public function testDeclineTransactionError401()
    {
        $precondition = Factory::instance('DeclineTransactionError401');

        $testdata = $precondition->getData();

        $this->assertTrue($testdata['amount'] == 4.01);
    }

    /**
     * Error 404 amount check
     *
     * @return void
     */
    public function testDeclineTransactionError404()
    {
        $precondition = Factory::instance('DeclineTransactionError404');

        $testdata = $precondition->getData();

        $this->assertTrue($testdata['amount'] == 4.04);
    }

    /**
     * Error 500 amount check
     *
     * @return void
     */
    public function testDeclineTransactionError500()
    {
        $precondition = Factory::instance('DeclineTransactionError500');

        $testdata = $precondition->getData();

        $this->assertTrue($testdata['amount'] == 5);
    }

    /**
     * Error 503 amount check
     *
     * @return void
     */
    public function testDeclineTransactionError503()
    {
        $precondition = Factory::instance('DeclineTransactionError503');

        $testdata = $precondition->getData();

        $this->assertTrue($testdata['amount'] == 5.03);
    }

    /**
     * Quote rejected by MMO1 amount check
     *
     * @return void
     */
    public function testQuoteRejectedByMmo1()
    {
        $precondition = Factory::instance('QuoteRejectedByMmo1');

        $testdata = $precondition->getData();

        $this->assertTrue($testdata['amount'] == 10.1);
    }

    /**
     * Rejected transaction amount check
     *
     * @return void
     */
    public function testRejectedTransation()
    {
        $precondition = Factory::instance('RejectedTransaction');

        $testdata = $precondition->getData();

        $this->assertTrue($testdata['amount'] == 51.03);
    }

    /**
     * Rejected transaction amount check
     *
     * @return void
     */
    public function testTransactionRequestRejectedByPayerFsp()
    {
        $precondition = Factory::instance(
            'TransactionRequestRejectedByPayerFsp'
        );

        $testdata = $precondition->getData();

        $this->assertTrue($testdata['amount'] == 10.1);
    }
}
