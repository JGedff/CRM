<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_home_route(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    public function test_clienthome_route(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
