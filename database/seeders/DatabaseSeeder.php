<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Alert;
use App\Models\Product;
use App\Models\Client;
use App\Models\SaleProposal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Alert::factory(10)->create();
        
        Product::factory(10)->create();

        Client::factory(10)
            ->has(SaleProposal::factory(2))
            ->create();
    }
}
