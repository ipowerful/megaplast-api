<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductColor;

class ProductColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductColor::create([
            'id' => 1,
            'price' => 900,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 108,
            'color_id' => 3,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 2,
            'price' => 900,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 108,
            'color_id' => 2,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 3,
            'price' => 3960,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 1,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 4,
            'price' => 3960,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 2,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 5,
            'price' => 2500,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 3,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 6,
            'price' => 1250,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 4,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 7,
            'price' => 210,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 2,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 8,
            'price' => 170,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 4,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 9,
            'price' => 180,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 3,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 10,
            'price' => 180,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 5,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 11,
            'price' => 1950,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 105,
            'color_id' => 6,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 12,
            'price' => 1950,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 105,
            'color_id' => 4,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 13,
            'price' => 2250,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 104,
            'color_id' => 6,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 14,
            'price' => 2250,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 104,
            'color_id' => 4,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 15,
            'price' => 2500,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 103,
            'color_id' => 6,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 16,
            'price' => 2500,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 103,
            'color_id' => 4,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 17,
            'price' => 7500,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 102,
            'color_id' => 1,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 18,
            'price' => 7500,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 102,
            'color_id' => 6,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 19,
            'price' => 3150,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 100,
            'color_id' => 3,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 20,
            'price' => 260,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 101,
            'color_id' => 7,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 21,
            'price' => 180,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 101,
            'color_id' => 4,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 22,
            'price' => 9000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 1,
            'color_id' => 3,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 23,
            'price' => 8000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 1,
            'color_id' => 4,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 24,
            'price' => 12000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 2,
            'color_id' => 3,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 25,
            'price' => 11000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 2,
            'color_id' => 4,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 26,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 3,
            'color_id' => 2,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 27,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 3,
            'color_id' => 8,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 28,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 3,
            'color_id' => 6,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 29,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 201,
            'color_id' => 2,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 30,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 201,
            'color_id' => 6,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 31,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 201,
            'color_id' => 5,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 32,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 202,
            'color_id' => 6,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 33,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 202,
            'color_id' => 3,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 34,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 202,
            'color_id' => 8,
            'images' => array(),
        ]);

        ProductColor::create([
            'id' => 35,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 2,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 36,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 6,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 37,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 3,
            'images' => array(),
        ]);
        ProductColor::create([
            'id' => 38,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 4,
            'images' => array(),
        ]);

        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 204,
            'color_id' => 2,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/cf5ef4df52/1_6420.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/d8320d155b/2_6420.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/39afd4dba4/3_6420.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/b399551e95/4_6420.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/c7f2a40a55/5_6420.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/84ac5acdd7/6_6420.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 204,
            'color_id' => 8,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/008877a94c/1_6420-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/9333dd57de/2_6420-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/d560b05d96/3_6420-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/f3bf03ddbe/4_6420-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/a51775c3db/5_6420-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/3705d70491/6_6420-ae.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 204,
            'color_id' => 3,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/cdd0830c1d/1_6420-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/6315aa0fe5/2_6420-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/057a5d059e/3_6420-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/5db01326aa/4_6420-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/849012be5d/5_6420-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/24427c0c57/6_6420-a-e.jpg',
            ),
        ]);
    }
}
