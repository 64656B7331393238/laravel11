<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("products")->insert(
            [
                [
                    'name' => "Iphone 16 Pro Max",
                    'price' => "1000",
                    'seller_id' => 1,
                    'updated_at' => "2024-11-07",
                    "created_at" => "2024-11-07",
                ],
                [
                    'name' => "Samsung M30",
                    'price' => "800",
                    'seller_id' => 2,
                    'updated_at' => "2024-11-07",
                    "created_at" => "2024-11-07",
                ],
                [
                    'name' => "Oppo A17",
                    'price' => "300",
                    'seller_id' => 1,
                    'updated_at' => "2024-11-07",
                    "created_at" => "2024-11-07",
                ],
            ]

        );
    }
}
