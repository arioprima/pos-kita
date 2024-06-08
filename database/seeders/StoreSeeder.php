<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Hash;


class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $stores = [
            ['id' => "1", 'store_name' => 'kantor pusat','store_location' => 'yogya',
            'created_at' => now(),'updated_at' => now(),],
            ['id' => "2", 'store_name' => 'cabang rusia','store_location' => 'rusia',
            'created_at' => now(),'updated_at' => now(),],
        ];
        DB::table('stores')->insert($stores);
    }
}