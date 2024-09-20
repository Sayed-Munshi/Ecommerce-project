<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class vendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vendors')->insert([
            [
                'name' => 'Cardiff',
                'email' => '123@gmail.com',
                'phone' => '017239768012',
                'address' => '5B Shrewsbury, Shropshire SY1 3TJ',
                'city' => 'Cardiff',
                'user_id' => '3',
                'created_at' => now(),
            ],
            [
                'name' => 'London',
                'email' => 'london@gmail.com',
                'phone' => '017239768031',
                'address' => '5B Shrewsbury, Shropshire SY1 3TJ',
                'city' => 'London',
                'user_id' => '3',
                'created_at' => now(),
            ],
            [
                'name' => 'Manchester',
                'email' => 'man@gmail.com',
                'phone' => '01723976801',
                'address' => '5B Shrewsbury, Shropshire SY1 3TJ',
                'city' => 'Manchester',
                'user_id' => '3',
                'created_at' => now(),
            ],
        ]);


    }
}
