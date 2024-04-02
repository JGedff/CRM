<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Client;
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

        $this->put('/alerts', [
            'content' => 'ALERT1',
            'username' => 'ALERT1',
        ]);

        $all = Alert::all();

        $newAlert = Alert::find(count($all));

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

        $this->put('/clients', [
            'name' => 'client1',
            'surname' => 'client1',
            'email' => 'client1',
            'phone' => 'client1',
            'adress' => 'client1',
            'type' => 'client1'
        ]);

        $all = Client::all();

        $newclient = Client::find(count($all));

        $this->assertEquals($newclient->name, 'client1');
        $this->assertEquals($newclient->surname, 'client1');
        $this->assertEquals($newclient->email, 'client1');
        $this->assertEquals($newclient->phone, 'client1');
        $this->assertEquals($newclient->adress, 'client1');
        $this->assertEquals($newclient->type, 'client1');
    }
}
