<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user_stores = [
            [
                'id' => "1", 'user_id' => '1', 'store_id' => '1',
            ],
            [
                'id' => "2", 'user_id' => '1', 'store_id' => '2',
            ],

        ];
        DB::table('user_stores')->insert($user_stores);
    }
}
