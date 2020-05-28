<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CallbackTest extends TestCase
{
    /**
     * put callback returns 204
     *
     * @return void
     */
    public function testPutCallback()
    {
        $response = $this->putJson('callback');

        $response->assertStatus(204);
    }

    /**
     * get callback returns 405
     *
     * @return void
     */
    public function testGetCallback()
    {
        $response = $this->getJson('callback');

        $response->assertStatus(405);
    }

    /**
     * post callback returns 200
     *
     * @return void
     */
    public function testPostCallback()
    {
        $response = $this->postJson('callback');

        $response->assertStatus(200);
    }

    /**
     * post callback returns 405
     *
     * @return void
     */
    public function testDeleteCallback()
    {
        $response = $this->deleteJson('callback');

        $response->assertStatus(405);
    }
}
