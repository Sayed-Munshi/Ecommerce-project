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
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
