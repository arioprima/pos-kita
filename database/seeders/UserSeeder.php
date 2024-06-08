<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = "admin";

        $users = [
            ['id' => "1", 'name' => 'bern','email' => 'bern@mail.com',            'password' => Hash::make($password),
            'created_at' => now(), 'updated_at' => now(),'first_name' => 'uchiha','last_name' => 'sasuke','phone' => '0811111111','position' => 'executive','hire_date' => now()],
        ];
        DB::table('users')->insert($users);
    }
}