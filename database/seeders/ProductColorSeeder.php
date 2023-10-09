<?php

namespace Database\Seeders;

use App\Models\ProductColor;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductColor::create([
            'price' => 900,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 108,
            'color_id' => 3,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/bc5545b69e/product108-1-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/093873153d/product108-2-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/fe8f108eef/product108-3-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/bcba934354/product108-4-grey.jpg'
            ),
        ]);


        ProductColor::create([
            'price' => 900,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 108,
            'color_id' => 2,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/f5b86e72fb/product108-1-red.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/093873153d/product108-2-red.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/fe8f108eef/product108-3-red.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/bcba934354/product108-4-red.jpg'
            ),
        ]);
    }
}
