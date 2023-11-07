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
            'image' => 'images/product/product108-1-grey.jpg',
        ]);
        Image::create([
            'product_color_id' => 1,
            'image' => 'images/product/product108-2-grey.jpg'
        ]);
        Image::create([
            'product_color_id' => 1,
            'image' => '/images/product/product108-3-grey.jpg',
        ]);
        Image::create([
            'product_color_id' => 1,
            'image' => 'images/product/product108-4-grey.jpg',
        ]);

        Image::create([
            'product_color_id' => 2,
            'image' => 'images/product/product108-1-red.jpg',
        ]);
        Image::create([
            'product_color_id' => 2,
            'image' => 'images/product/product108-2-red.jpg'
        ]);
        Image::create([
            'product_color_id' => 2,
            'image' => 'images/product/product108-3-red.jpg',
        ]);
        Image::create([
            'product_color_id' => 2,
            'image' => 'images/product/product108-4-red.jpg',
        ]);
    }
}
