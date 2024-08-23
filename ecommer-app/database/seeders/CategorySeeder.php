<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('categories')->insert([
            [
                'name' => strtolower('breakfast'),
                'icon' => 'images/categories/temp/1.svg',
                'created_at' => now(),
            ],
            [
                'name' => strtolower('lunch'),
                'icon' => 'images/categories/temp/2.svg',
                'created_at' => now(),
            ],
            [
                'name' => strtolower('dinner'),
                'icon' => 'images/categories/temp/3.svg',
                'created_at' => now(),
            ],
        ]);
    }
}
