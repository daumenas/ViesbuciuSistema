<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response2 = $this->get('/');
        $response3 = $this->get('/');

        $response->assertStatus(200);
        $response2->assertStatus(400);
        $response3->assertStatus(400);
    }
}
