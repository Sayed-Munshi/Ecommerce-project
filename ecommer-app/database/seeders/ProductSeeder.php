<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'user_id' => '3',
                'product_name' => 'Muffets & Tuffets Burger',
                'category_id' => '1',
                'subcategory_id' => '1',
                'purchase_price' => '20',
                'sell_price' => '25',
                'description' => '<p>'.fake()->realText(200).'</p>',
                'additional_description' => '<p>'.fake()->realText(350).'</p>',
                'thumbnail_image' => 'images/products/thumbnail/temp/1.png',
                'created_at' => now(),
            ],
            [
                'user_id' => '3',
                'product_name' => 'Muffets & Tuffets Pizza',
                'category_id' => '2',
                'subcategory_id' => '2',
                'purchase_price' => '50',
                'sell_price' => '85',
                'description' => '<p>'.fake()->realText(200).'</p>',
                'additional_description' => '<p>'.fake()->realText(350).'</p>',
                'thumbnail_image' => 'images/products/thumbnail/temp/2.jpg',
                'created_at' => now(),
            ],
            [
                'user_id' => '3',
                'product_name' => 'Muffets & Tuffets Meat',
                'category_id' => '3',
                'subcategory_id' => '3',
                'purchase_price' => '300',
                'sell_price' => '400',
                'description' => '<p>'.fake()->realText(200).'</p>',
                'additional_description' => '<p>'.fake()->realText(350).'</p>',
                'thumbnail_image' => 'images/products/thumbnail/temp/3.jpg',
                'created_at' => now(),
            ],
        ]);

        DB::table('product_galleries')->insert([
            [
                'product_id' => '1',
                'gallery_image' => 'images/products/gallery/temp/1/1.png',
                'created_at' => now(),
            ],
            [
                'product_id' => '1',
                'gallery_image' => 'images/products/gallery/temp/1/2.png',
                'created_at' => now(),
            ],
            [
                'product_id' => '1',
                'gallery_image' => 'images/products/gallery/temp/1/3.png',
                'created_at' => now(),
            ],
            [
                'product_id' => '2',
                'gallery_image' => 'images/products/gallery/temp/2/1.jpg',
                'created_at' => now(),
            ],
            [
                'product_id' => '2',
                'gallery_image' => 'images/products/gallery/temp/2/2.jpg',
                'created_at' => now(),
            ],
            [
                'product_id' => '2',
                'gallery_image' => 'images/products/gallery/temp/2/3.jpg',
                'created_at' => now(),
            ],
            [
                'product_id' => '3',
                'gallery_image' => 'images/products/gallery/temp/3/1.jpg',
                'created_at' => now(),
            ],
            [
                'product_id' => '3',
                'gallery_image' => 'images/products/gallery/temp/3/2.jpg',
                'created_at' => now(),
            ],
            [
                'product_id' => '3',
                'gallery_image' => 'images/products/gallery/temp/3/3.jpg',
                'created_at' => now(),
            ],
        ]);
    }
}
