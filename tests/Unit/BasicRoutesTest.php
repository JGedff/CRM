<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class BasicRoutesTest extends TestCase
{

    public function test_alert_index_route(): void
    {
        $user = User::find(1);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/alerts');

        $response->assertStatus(200);
    }

    public function test_alert_create_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/alerts/create');

        $response->assertStatus(200);
    }
    
    public function test_alert_show_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/alerts/1');

        $response->assertStatus(200);
    }
    
    public function test_alert_edit_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/alerts/1/edit');

        $response->assertStatus(200);
    }
    
    public function test_client_index_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/clients');

        $response->assertStatus(200);
    }

    public function test_client_create_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/clients/create');

        $response->assertStatus(200);
    }

    public function test_client_show_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/clients/1');

        $response->assertStatus(200);
    }
    
    public function test_client_edit_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/clients/1/edit');

        $response->assertStatus(200);
    }
    
    public function test_product_index_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/products');

        $response->assertStatus(200);
    }

    public function test_product_create_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/products/create');

        $response->assertStatus(200);
    }

    public function test_product_show_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/products/1');

        $response->assertStatus(200);
    }
    
    public function test_product_edit_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/products/1/edit');

        $response->assertStatus(200);
    }
    
    public function test_sale_proposal_index_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/saleProposals');

        $response->assertStatus(200);
    }

    public function test_sale_proposal_create_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/saleProposals/create');

        $response->assertStatus(200);
    }

    public function test_sale_proposal_show_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/saleProposals/1');

        $response->assertStatus(200);
    }
    
    public function test_sale_proposal_edit_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/saleProposals/1/edit');

        $response->assertStatus(200);
    }
}
