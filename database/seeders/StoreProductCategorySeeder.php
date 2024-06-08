<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class StoreProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $store_product_categories = [
            [
                'id' => "1", 'store_id' => '1', 'product_category_id' => '1',
            ],
            [
                'id' => "2", 'store_id' => '1', 'product_category_id' => '2',
            ],
            [
                'id' => "3", 'store_id' => '2', 'product_category_id' => '2',
            ],

        ];
        DB::table('store_product_categories')->insert($store_product_categories);
    }
}
