<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $product_categories = [
            [
                'id' => "1", 'product_category_name' => 'sembako',
            ],
            [
                'id' => "2", 'product_category_name' => 'kosmetik',
            ],

        ];
        DB::table('product_categories')->insert($product_categories);
    }
}
