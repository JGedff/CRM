<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Client;
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
}