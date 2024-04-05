<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Client;
use App\Models\SaleProposal;
use App\Models\User;
use Tests\TestCase;

class AdvancedRoutesTest extends TestCase
{
    public function test_alert_show_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/alerts/1');

        $response->assertStatus(200);
    }
    
    public function test_alert_edit_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/alerts/1/edit');

        $response->assertStatus(200);
    }

    public function test_client_show_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/clients/1');

        $response->assertStatus(200);
    }
    
    public function test_client_edit_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/clients/1/edit');

        $response->assertStatus(200);
    }
    
    public function test_product_show_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/products/1');

        $response->assertStatus(200);
    }
    
    public function test_product_edit_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/products/1/edit');

        $response->assertStatus(200);
    }

    public function test_sale_proposal_index_route(): void
    {
        $user = User::find(1);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->post('/clients', [
            'name' => 'client1',
            'surname' => 'client1',
            'email' => 'a@b',
            'phone' => '12321312',
            'adress' => 'client1',
            'type' => 'client1'
        ]);

        $all = Client::all();
        $newclient = count($all) + 1;

        $response = $this->get('/clients' . '/' . $newclient . '/saleProposals');

        $response->assertStatus(200);
    }

    public function test_sale_proposal_create_route(): void
    {
        $user = User::find(1);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->post('/clients', [
            'name' => 'client1',
            'surname' => 'client1',
            'email' => 'a@b',
            'phone' => '12321312',
            'adress' => 'client1',
            'type' => 'client1'
        ]);

        $this->post('/clients/1/saleProposals', [
            'client_id' => 1,
            'state' => 'sended',
            'quantity_sold' => 10,
            'total_price' => 10
        ]);

        $response = $this->get('/clients/1/saleProposals/create');

        $response->assertStatus(200);
    }
    
    public function test_sale_proposal_show_route(): void
    {
        $user = User::find(1);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/clients/1/saleProposals/1');

        $response->assertStatus(200);
    }
    
    public function test_sale_proposal_edit_route(): void
    {
        $user = User::find(1);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->get('/clients/1/saleProposals/1/edit');

        $response->assertStatus(200);
    }
}
