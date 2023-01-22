<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testFunction()
    {
        $data = 'lorem';

        $this->assertIsString($data);
    }

    public function testRoute()
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSeeText('this is home page');
    }
    public function testRoute404()
    {
        $this->get('/routenotfound')
            ->assertStatus(404);
    }
}
