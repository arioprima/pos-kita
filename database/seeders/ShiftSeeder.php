<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Hash;


class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $shifts = [
            ['id' => "1", 'shift_name' => 'pagi',
            'created_at' => now(),'updated_at' => now(), 'shift_date' => now(),'start_time' => now(),'end_time' => now(),],
            ['id' => "2", 'shift_name' => 'siang',
            'created_at' => now(),'updated_at' => now(),'shift_date' => now(),'start_time' => now(),'end_time' => now(),],
        ];
        DB::table('shifts')->insert($shifts);
    }
}