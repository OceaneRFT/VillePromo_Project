<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('product')->insert([
            
            "category_id"       =>    2,
            "name"       =>    "Converse",
            "description"      =>    "Chaussures pour femme converses blanche",
            "price"      =>    "60",
            "SKU"      =>    "3",
            "picture" => "converse.png"
        ]);
        DB::table('product')->insert([
            "category_id"       =>    3,
            "name"       =>    "Appareil Photo",
            "description"      =>    "Appareil photo reflex",
            "price"      =>    "650",
            "SKU"      =>    "2",
            "picture" => "appareilphoto.png"
        ]);
        DB::table('product')->insert([
            "category_id"       =>    2,
            "name"       =>    "Basket",
            "description"      =>    "Basket bicolore",
            "price"      =>    "80",
            "SKU"      =>    "10",
            "picture" => "basket.png"
        ]);
        DB::table('product')->insert([
            "category_id"       =>    4,
            "name"       =>    "Pc Portable",
            "description"      =>    "PC portable bureautique",
            "price"      =>    "500",
            "SKU"      =>    "5",
            "picture" => "pcportable.png"
        ]);
    }
}
