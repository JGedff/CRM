<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Client;
use App\Models\User;
use App\Models\Alert;
use Tests\TestCase;

class AdvancedRoutesTest extends TestCase
{
    public function test_create_new_alert(): void
    {
        $user = User::find(1);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->post('/alerts', [
            'content' => 'AlertContent',
            'username' => 'USERNAME',
        ]);

        $all = Alert::all();

        $newAlert = Alert::find(count($all));

        $response->assertStatus(200);

        $this->assertEquals($newAlert->content, 'AlertContent');
        $this->assertEquals($newAlert->username, 'USERNAME');
    }

    public function test_alert_update_route(): void
    {
        $user = User::find(1);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $lastAlert = Alert::find(1);

        $response = $this->post('/alerts/1', [
            'content' => 'NewContent',
            'username' => 'YAAAA',
        ]);

        $newAlert = Alert::find(1);

        $response->assertStatus(200);
        
        $this->assertNotEquals($newAlert->content, $lastAlert->content);
        $this->assertNotEquals($newAlert->username, $lastAlert->username);
        
        $this->assertEquals($newAlert->content, 'NewContent');
        $this->assertEquals($newAlert->username, 'YAAAA');
    }
    
    public function test_alert_delete_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        
        $alertToDelete = Alert::find(1);

        $response = $this->delete('/alerts/1');

        $response->assertStatus(200);

        $allAlerts = Alert::all();

        $this->assertNotContains($allAlerts, $alertToDelete);
    }
    
    public function test_create_new_client(): void
    {
        $user = User::find(1);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->post('/clients', [
            'name' => 'client1',
            'surname' => 'client1',
            'email' => 'client1',
            'phone' => 'client1',
            'adress' => 'client1',
            'type' => 'client1'
        ]);

        $all = Client::all();

        $newclient = Client::find(count($all));

        $response->assertStatus(200);

        $this->assertEquals($newclient->name, 'client1');
        $this->assertEquals($newclient->surname, 'client1');
        $this->assertEquals($newclient->email, 'client1');
        $this->assertEquals($newclient->phone, 'client1');
        $this->assertEquals($newclient->adress, 'client1');
        $this->assertEquals($newclient->type, 'client1');
    }

    public function test_client_update_route(): void
    {
        $user = User::find(1);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $lastclient = client::find(1);

        $response = $this->post('/clients/1', [
            'name' => 'AAACILENTAAA3',
            'surname' => 'AAACILENTAAA3',
            'email' => 'AAACILENTAAA3',
            'phone' => 'AAACILENTAAA3',
            'adress' => 'AAACILENTAAA3',
            'type' => 'AAACILENTAAA3'
        ]);

        $newclient = client::find(1);

        $response->assertStatus(200);
        
        $this->assertNotEquals($newclient->name, $lastclient->name);
        $this->assertNotEquals($newclient->surname, $lastclient->surname);
        $this->assertNotEquals($newclient->email, $lastclient->email);
        $this->assertNotEquals($newclient->phone, $lastclient->phone);
        $this->assertNotEquals($newclient->adress, $lastclient->adress);
        $this->assertNotEquals($newclient->type, $lastclient->type);

        $this->assertEquals($newclient->name, 'AAACILENTAAA3');
        $this->assertEquals($newclient->surname, 'AAACILENTAAA3');
        $this->assertEquals($newclient->email, 'AAACILENTAAA3');
        $this->assertEquals($newclient->phone, 'AAACILENTAAA3');
        $this->assertEquals($newclient->adress, 'AAACILENTAAA3');
        $this->assertEquals($newclient->type, 'AAACILENTAAA3');
    }
    
    public function test_client_delete_route(): void
    {
        $user = User::find(1);
        
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->delete('/clients/1');

        $lastClient = Client::find(1);
        
        $response->assertStatus(200);

        $this->assertFalse(empty($lastClient));
    }
}
