<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $products = [
            [
                'id' => "1", 'product_name' => 'susu kotak', 'product_category_id' => '1','description' => 'segarrr',
            ],
            [
                'id' => "2", 'product_name' => 'kue pie', 'product_category_id' => '2','description' => 'enaak',
            ],

        ];
        DB::table('products')->insert($products);
    }
}
