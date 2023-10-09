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
                'https://a.storyblok.com/f/186792/2000x2000/ed44b5ebac/product108-2-red.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/ab6527b002/product108-3-red.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/79712f1bc8/product108-4-red.jpg'
            ),
        ]);

        ProductColor::create([
            'price' => 3960,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 1,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/5e4a0ea734/product107-1-yellow.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/de9d19cbfa/product107-2-yellow.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/356c7b7919/product107-3-yellow.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/ac39deccd1/product107-4-yellow.jpg'
            ),
        ]);
        ProductColor::create([
            'price' => 3960,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 2,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/34237b0136/product107-1-red.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/e83f6372c3/product107-2-red.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/cef7af114d/product107-3-red.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/f91dbe2fb9/product107-4-red.jpg'
            ),
        ]);
        ProductColor::create([
            'price' => 2500,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 3,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/1220a1ec1b/product107-1-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/4b0f693288/product107-2-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/b6cade457d/product107-3-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/2658029e07/product107-4-grey.jpg'
            ),
        ]);
        ProductColor::create([
            'price' => 1250,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 4,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/22a73d1a2a/product107-1-black.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/005c12aa88/product107-2-black.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/738d29ba3e/product107-3-black.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/1628acce5b/product107-4-black.jpg'
            ),
        ]);

        ProductColor::create([
            'price' => 210,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 2,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/fd34919656/1_64151.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/6b30beeb85/2_64151.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/dce9fcc0b0/3_64151.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/9a5efd476f/4_64151.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/615b6c8efd/5_64151.jpg'
            ),
        ]);
        ProductColor::create([
            'price' => 170,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 4,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/395f8a8f91/1_64151-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/834a26da61/2_64151-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/dbb75ae669/3_64151-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/e4897c859c/4_64151-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/671ab25133/5_64151-a-e.jpg'
            ),
        ]);
        ProductColor::create([
            'price' => 180,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 3,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/7c9bc630f2/1_64151-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/b833231d90/2_64151-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/688e53ae2f/3_64151-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/89efae9c3c/4_64151-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/f93ae007ae/5_64151-ae.jpg'
            ),
        ]);
        ProductColor::create([
            'price' => 180,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 5,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/27cb33399b/1_64151-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/12be1863f3/2_64151-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/2407ad0566/3_64151-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/983ddd7249/4_64151-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/94fbd5dedd/5_64151-e.jpg'
            ),
        ]);
    }
}
