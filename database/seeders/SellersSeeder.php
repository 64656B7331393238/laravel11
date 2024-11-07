<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("sellers")->insert([
            [
                "name" => "Dekston",
                'updated_at' => "2024-11-07",
                "created_at" => "2024-11-07",
            ],
            [
                "name" => "Rinney",
                'updated_at' => "2024-11-07",
                "created_at" => "2024-11-07",
            ],
        ]);
    }
}
