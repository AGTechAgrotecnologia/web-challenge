<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'Tarsísio Xavier',
            'email' => 'tarsisio.xavier@mail.com',
            'password' => 'secret123',
        ]);

        $this->call([
            ShoppingSeeder::class,
        ]);
    }
}
