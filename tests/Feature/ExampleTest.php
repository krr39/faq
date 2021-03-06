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

        $response->assertStatus(200);
    }
    public function testRegisterPageStatusCode()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function testLoginPageStatusCode()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function testCalcPageStatusCode()
    {
        $response = $this->get('/Calculator');
        $response->assertStatus(200);
    }

}
