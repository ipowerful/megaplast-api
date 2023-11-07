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
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 201,
            'color_id' => 2,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/5de9ef17d5/1_e2.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/9ac17dfee7/2_e2.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/81f8a57e5a/3_e2.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/b5385cc411/4_e2.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/29de03db22/5_e2.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 201,
            'color_id' => 6,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/d0637c5a91/1_e2-o-o1.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/546a18a5f2/2_e2-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/7c04bd89e2/3_e2-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/801410cd34/4_e2-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/a6fe1352e4/5_e2-o-o.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 201,
            'color_id' => 5,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/f4e386466d/1_e2-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/37985b3342/2_e2-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/3a256b7a73/3_e2-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/814644e79e/4_e2-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/7080caf7eb/5_e2-e.jpg',
            ),
        ]);

        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 202,
            'color_id' => 6,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/7c717cb72a/1_3305-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/04251af9de/2_3305-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/0a27c9d285/3_3305-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/7507cc6a69/4_3305-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/25700c2463/5_3305-o-o.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 202,
            'color_id' => 3,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/a2fdf02aa0/1_3305-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/7d43b43b39/2_3305-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/661721f9b8/3_3305-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/6911ea6ede/4_3305-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/6fe3511ce1/5_3305-ae.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 202,
            'color_id' => 8,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/f84e387551/1_3305-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/f053b25066/2_3305-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/0fe45c71e6/3_3305-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/603a0aac60/4_3305-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/d5adb27dbe/5_3305-ae.jpg',
            ),
        ]);

        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 2,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/418e19dd57/1_6415.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/b2d2768504/2_6415.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/5a83ac0bd6/3_6415.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/9175c6393a/4_6415.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/8b41c7d61a/5_6415.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 6,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/e032506621/1_6415-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/b30c215987/2_6415-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/e9b692225e/3_6415-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/a30a5812bd/4_6415-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/8617d64274/5_6415-o-o.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 3,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/5909d3f35b/1_6415-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/55fbda738a/2_6415-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/661721f9b8/3_3305-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/0079c14519/4_6415-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/ebffaf7139/5_6415-ae.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 4,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/44a93b6858/1_6415-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/47d3db7745/2_6415-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/4c2034f51d/3_6415-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/7fdee24b7f/4_6415-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/33e642c3cf/5_6415-a-e.jpg',
            ),
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
