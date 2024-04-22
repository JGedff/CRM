<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Client;
use App\Models\SaleProposal;
use App\Models\Product;
use App\Models\User;
use App\Models\Alert;
use Tests\TestCase;

class UpdateRoutesTest extends TestCase
{
    public function test_alert_update_route(): void
    {
        $user = User::find(1);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->post('/alerts', [
            'content' => 'ALERT1',
            'username' => 'ALERT1',
        ]);

        $all = Alert::all();
        $lastNumber = count($all) + 1;
        $lastAlert = Alert::find($lastNumber);

        $this->put('/alerts' . '/' . $lastNumber, [
            'content' => 'NewContent',
            'username' => 'YAAAA',
        ]);

        $newAlert = Alert::find($lastNumber);
        
        $this->assertNotEquals($newAlert->content, $lastAlert->content);
        $this->assertNotEquals($newAlert->username, $lastAlert->username);
        
        $this->assertEquals($newAlert->content, 'NewContent');
        $this->assertEquals($newAlert->username, 'YAAAA');
    }

    public function test_client_update_route(): void
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
        $lastNumber = count($all) + 1;
        $lastclient = Client::find($lastNumber);

        $this->put('/clients'. '/' . $lastNumber, [
            'name' => 'AAACILENTAAA3',
            'surname' => 'AAACILENTAAA3',
            'email' => 'AAACILENTAAA3',
            'phone' => 'AAACILENTAAA3',
            'adress' => 'AAACILENTAAA3',
            'type' => 'AAACILENTAAA3'
        ]);

        $newclient = Client::find($lastNumber);

        $this->assertNotEquals($lastclient->name, $newclient->name);
        $this->assertNotEquals($lastclient->surname, $newclient->surname);
        $this->assertNotEquals($lastclient->email, $newclient->email);
        $this->assertNotEquals($lastclient->phone, $newclient->phone);
        $this->assertNotEquals($lastclient->adress, $newclient->adress);
        $this->assertNotEquals($lastclient->type, $newclient->type);

        $this->assertEquals($newclient->name, 'AAACILENTAAA3');
        $this->assertEquals($newclient->surname, 'AAACILENTAAA3');
        $this->assertEquals($newclient->email, 'AAACILENTAAA3');
        $this->assertEquals($newclient->phone, 'AAACILENTAAA3');
        $this->assertEquals($newclient->adress, 'AAACILENTAAA3');
        $this->assertEquals($newclient->type, 'AAACILENTAAA3');
    }
    
    public function test_product_update_route(): void
    {
        $user = User::find(1);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        
        $this->post('/products', [
            'name' => 'BBBB',
            'description' => 'BBBB',
            'price' => 20,
            'stock' => 20,
            'monthly_quota' => 20,
            'duration' => '1234-10-10'
        ]);

        $all = Product::all();
        $lastNumber = count($all) + 1;
        $lastProduct = Product::find($lastNumber);

        $this->put('/products'. '/' . $lastNumber, [
            'name' => 'AAAA',
            'description' => 'AAAA',
            'price' => 10,
            'stock' => 10,
            'monthly_quota' => 10,
            'duration' => '2000-01-01'
        ]);

        $newProduct = Product::find($lastNumber);

        $this->assertNotEquals($lastProduct->name, $newProduct->name);
        $this->assertNotEquals($lastProduct->description, $newProduct->description);
        $this->assertNotEquals($lastProduct->price, $newProduct->price);
        $this->assertNotEquals($lastProduct->stock, $newProduct->stock);
        $this->assertNotEquals($lastProduct->monthly_quota, $newProduct->monthly_quota);
        $this->assertNotEquals($lastProduct->duration, $newProduct->duration);

        $this->assertEquals($newProduct->name, 'AAAA');
        $this->assertEquals($newProduct->description, 'AAAA');
        $this->assertEquals($newProduct->price, 10);
        $this->assertEquals($newProduct->stock, 10);
        $this->assertEquals($newProduct->monthly_quota, 10);
        $this->assertEquals($newProduct->duration, '2000-01-01');
    }
    
    public function test_sale_proposals_update_route(): void
    {
        $user = User::find(1);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        
        $this->post('/clients/2/saleProposals', [
            'state' => 'to check',
            'quantity_sold' => 9,
            'total_price' => 9
        ]);

        $all = SaleProposal::all();
        $lastProposalId = count($all);
        $lastSaleProposal = SaleProposal::find($lastProposalId);

        $this->put('/clients/2/saleProposals/' . $lastProposalId, [
            'state' => 'accepted',
            'quantity_sold' => 10,
            'total_price' => 9
        ]);

        $newSaleProposal = SaleProposal::find($lastProposalId);

        $this->assertNotEquals($lastSaleProposal->state, $newSaleProposal->state);
        $this->assertNotEquals($lastSaleProposal->quantity_sold, $newSaleProposal->quantity_sold);

        $this->assertEquals($newSaleProposal->state, 'accepted');
        $this->assertEquals($newSaleProposal->quantity_sold, 10);
        $this->assertEquals($newSaleProposal->total_price, 9);
    }
}