<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            [
                'category_id' => '1',
                'name' => strtolower('burger cupboard'),
                'created_at' => now(),
            ],
            [
                'category_id' => '2',
                'name' => strtolower('pizza cupboard'),
                'created_at' => now(),
            ],
            [
                'category_id' => '3',
                'name' => strtolower('meat cupboard'),
                'created_at' => now(),
            ],
        ]);
    }
}
