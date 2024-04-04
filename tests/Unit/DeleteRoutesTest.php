<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Client;
use App\Models\Product;
use App\Models\User;
use App\Models\Alert;
use Tests\TestCase;

class DeleteRoutesTest extends TestCase
{
    public function test_alert_delete_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        
        $this->delete('/alerts/1');

        $this->assertDatabaseMissing('alerts', [
            'id' => 1
        ]);
    }
    
    public function test_client_delete_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->delete('/clients/1');

        $this->assertDatabaseMissing('clients', [
            'id' => 1
        ]);
    }
    
    public function test_product_delete_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->delete('/products/1');

        $this->assertDatabaseMissing('products', [
            'id' => 1
        ]);
    }
}