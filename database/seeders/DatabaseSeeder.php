<?php

namespace Database\Seeders;

use App\Models\{Product, Category};
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();
        \App\Models\Category::factory(5)->create();
        \App\Models\Product::factory(30)->create();
        \App\Models\Shop::factory(10)->create();
        // \App\Models\Order::factory(3)->create();      
    }
}
