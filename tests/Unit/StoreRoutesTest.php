<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Client;
use App\Models\Product;
use App\Models\User;
use App\Models\Alert;
use Tests\TestCase;

class StoreRoutesTest extends TestCase
{
    public function test_create_new_alert(): void
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

        $newAlert = Alert::find(count($all) + 1);

        $this->assertEquals($newAlert->content, 'ALERT1');
        $this->assertEquals($newAlert->username, 'ALERT1');
    }
    
    public function test_create_new_client(): void
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

        $newclient = Client::find(count($all) + 1);

        $this->assertEquals($newclient->name, 'client1');
        $this->assertEquals($newclient->surname, 'client1');
        $this->assertEquals($newclient->email, 'a@b');
        $this->assertEquals($newclient->phone, '12321312');
        $this->assertEquals($newclient->adress, 'client1');
        $this->assertEquals($newclient->type, 'client1');
    }
    
    public function test_create_new_product(): void
    {
        $user = User::find(1);

        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->post('/products', [
            'name' => 'product1',
            'description' => 'product1',
            'price' => 10,
            'stock' => 10,
            'monthly_quota' => 10,
            'duration' => '2000-01-01'
        ]);

        $all = Product::all();

        $newProduct = Product::find(count($all) + 1);

        $this->assertEquals($newProduct->name, 'product1');
        $this->assertEquals($newProduct->description, 'product1');
        $this->assertEquals($newProduct->price, 10);
        $this->assertEquals($newProduct->stock, 10);
        $this->assertEquals($newProduct->monthly_quota, 10);
        $this->assertEquals($newProduct->duration, '2000-01-01');
    }
}
