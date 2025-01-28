<?php

namespace Database\Seeders;

use App\Models\Shopping;
use Illuminate\Database\Seeder;

class ShoppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shopping::factory()->count(100)->create();
    }
}
