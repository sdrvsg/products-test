<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Product::factory()->count(10)->create();
        Product::factory()->count(5)->trashed()->create();
    }
}
