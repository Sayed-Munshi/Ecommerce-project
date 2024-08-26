<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'FastKart',
                'email' => 'fastkart@mailinator.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Pa$$w0rd!'),
                'photo' => Null,
                'role' => 'SUPER ADMIN',
                'phone' => '00000000000',
                'about' => fake()->realText(20),
                'zip_code' => '00000',
                'address' => 'Demo Street, Address Building',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('pass'),
                'photo' => NULL,
                'role' => 'ADMIN',
                'phone' => '00000000000',
                'about' => fake()->realText(20),
                'zip_code' => '00000',
                'address' => 'Demo Street, Address Building',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Seller',
                'email' => 'seller@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('pass'),
                'photo' => NULL,
                'role' => 'SELLER',
                'phone' => '01723976801',
                'about' => fake()->realText(20),
                'zip_code' => '20500',
                'address' => '5B Shrewsbury, Shropshire SY1 3TJ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Customer',
                'email' => 'customer@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('pass'),
                'photo' => NULL,
                'role' => 'CUSTOMER',
                'phone' => '01723976801',
                'about' => fake()->realText(20),
                'zip_code' => '10300',
                'address' => '7B Shrewsbury, Shropshire SY1 3TJ',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
