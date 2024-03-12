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

        $response = $this->get('/alert');

        $response->assertStatus(200);
    }

    public function test_alert_create_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/alert/create');

        $response->assertStatus(200);
    }
    
    public function test_alert_show_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/alert/1');

        $response->assertStatus(200);
    }
    
    public function test_alert_edit_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/alert/1/edit');

        $response->assertStatus(200);
    }
    
    public function test_client_index_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/client');

        $response->assertStatus(200);
    }

    public function test_client_create_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/client/create');

        $response->assertStatus(200);
    }

    public function test_client_show_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/client/1');

        $response->assertStatus(200);
    }
    
    public function test_client_edit_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/client/1/edit');

        $response->assertStatus(200);
    }
    
    public function test_product_index_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/product');

        $response->assertStatus(200);
    }

    public function test_product_create_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/product/create');

        $response->assertStatus(200);
    }

    public function test_product_show_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/product/1');

        $response->assertStatus(200);
    }
    
    public function test_product_edit_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/product/1/edit');

        $response->assertStatus(200);
    }
    
    public function test_sale_proposal_index_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/saleProposal');

        $response->assertStatus(200);
    }

    public function test_sale_proposal_create_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/saleProposal/create');

        $response->assertStatus(200);
    }

    public function test_sale_proposal_show_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/saleProposal/1');

        $response->assertStatus(200);
    }
    
    public function test_sale_proposal_edit_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/saleProposal/1/edit');

        $response->assertStatus(200);
    }
}
