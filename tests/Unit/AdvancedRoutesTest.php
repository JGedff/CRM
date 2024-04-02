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
    
    public function test_alert_delete_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        
        $alertToDelete = Alert::find(1);

        $this->delete('/alerts/1');

        $lastAlert = Alert::find(1);

        $this->assertFalse(true);
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
    
    public function test_client_delete_route(): void
    {
        $user = User::find(1);
        
        $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->delete('/clients/1');

        $lastClient = Client::find(1);

        $this->assertDatabaseMissing('clients', [
            'id' => 1
        ]);
    }
}
