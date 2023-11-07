<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::create([
            'product_color_id' => 1,
            'image' => '/images/product/product108-1-grey.jpg',
            'sort_order' => 1,
        ]);
        Image::create([
            'product_color_id' => 1,
            'image' => '/images/product/product108-2-grey.jpg',
            'sort_order' => 2,
        ]);
        Image::create([
            'product_color_id' => 1,
            'image' => '/images/product/product108-3-grey.jpg',
            'sort_order' => 3,
        ]);
        Image::create([
            'product_color_id' => 1,
            'image' => '/images/product/product108-4-grey.jpg',
            'sort_order' => 4,
        ]);


        Image::create([
            'product_color_id' => 2,
            'image' => '/images/product/product108-1-red.jpg',
            'sort_order' => 1,
        ]);
        Image::create([
            'product_color_id' => 2,
            'image' => '/images/product/product108-2-red.jpg',
            'sort_order' => 2,
        ]);
        Image::create([
            'product_color_id' => 2,
            'image' => '/images/product/product108-3-red.jpg',
            'sort_order' => 3,
        ]);
        Image::create([
            'product_color_id' => 2,
            'image' => '/images/product/product108-4-red.jpg',
            'sort_order' => 4,
        ]);


        Image::create([
            'product_color_id' => 3,
            'image' => '/images/product/product107-1-yellow.jpg',
            'sort_order' => 1,
        ]);
        Image::create([
            'product_color_id' => 3,
            'image' => '/images/product/product107-2-yellow.jpg',
            'sort_order' => 2,
        ]);
        Image::create([
            'product_color_id' => 3,
            'image' => '/images/product/product107-3-yellow.jpg',
            'sort_order' => 3,
        ]);
        Image::create([
            'product_color_id' => 3,
            'image' => '/images/product/product107-4-yellow.jpg',
            'sort_order' => 4,
        ]);


        Image::create([
            'product_color_id' => 4,
            'image' => '/images/product/product107-1-red.jpg',
            'sort_order' => 1,
        ]);
        Image::create([
            'product_color_id' => 4,
            'image' => '/images/product/product107-2-red.jpg',
            'sort_order' => 2,
        ]);
        Image::create([
            'product_color_id' => 4,
            'image' => '/images/product/product107-3-red.jpg',
            'sort_order' => 3,
        ]);
        Image::create([
            'product_color_id' => 4,
            'image' => '/images/product/product107-4-red.jpg',
            'sort_order' => 4,
        ]);
    }
}
