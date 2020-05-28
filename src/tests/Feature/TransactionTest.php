<?php

namespace Tests\Feature;

use App\Preconditions\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Tests\TestCase;

class TransactionTest extends TestCase
{
    /**
     * no test case returns false
     *
     * @return void
     */
    public function testNoTestCase()
    {
        $response = $this->post('');

        $response->assertJson([
            'success' => false,
            'message' => 'No such test case!',
        ]);
    }

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function testPostTransactions()
    {
        $mock = new MockHandler([new Response(202)]);

        $handlerStack = HandlerStack::create($mock);

        $client = new Client([
            "base_uri" => "http://localhost:8087",
            "handler" => $handlerStack,
        ]);

        $response = $client->post('AuthorizedTransaction');

        $this->assertTrue($response->getStatusCode() == 202);
    }
}
