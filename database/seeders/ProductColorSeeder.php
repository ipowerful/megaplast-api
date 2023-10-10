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

        ProductColor::create([
            'price' => 1950,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 105,
            'color_id' => 6,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/719a774740/1_12800-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/7119c70151/2_12800-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/46c0a94297/3_12800-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/46c0a94297/3_12800-o-o.jpg', // нет 4го изображения
                'https://a.storyblok.com/f/186792/2000x2000/27ee6d9cca/5_12800-o-o.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 1950,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 105,
            'color_id' => 4,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/73397c9549/1_12800-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/5994e1b7cc/2_12800-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/28910b0459/3_12800-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/65a8e42b7b/4_12800-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/1810d52fc0/5_12800-a-e.jpg',
            ),
        ]);

        ProductColor::create([
            'price' => 2250,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 104,
            'color_id' => 6,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/d25a960de5/1_12801-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/94fa8bca95/2_12801-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/f4e1ffead6/3_12801-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/617a73dc30/4_12801-o-o.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 2250,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 104,
            'color_id' => 4,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/e06d967035/1_12801-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/b891699487/2_12801-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/922f9f60f9/3_12801-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/13a13bfabe/4_12801-ae-e.jpg',
            ),
        ]);

        ProductColor::create([
            'price' => 2500,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 103,
            'color_id' => 6,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/15a45201a3/1_12100-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/b891699487/2_12801-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/5126695bc6/3_12100-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/b33f2694f6/4_12100-o-o.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 2500,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 103,
            'color_id' => 4,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/3d553ec84d/1_12100-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/6a78bf1dea/2_12100-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/07b25891b2/3_12100-a-e.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/0357c61532/4_12100-a-e.jpg',
            ),
        ]);

        ProductColor::create([
            'price' => 7500,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 102,
            'color_id' => 1,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/c384d3e815/1_11725.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/a835cf43f5/2_11725.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/e5e142eaad/3_11725.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/996815c578/4_11725.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/25fbabf813/5_11725-s-ae.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 7500,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 102,
            'color_id' => 6,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/f61ec153aa/1_11725.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/5e958d0f2b/2_11725.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/6a7d6504a9/3_11725.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/66d9d1e52e/4_11725.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/122954d318/5_11725.jpg',
            ),
        ]);

        ProductColor::create([
            'price' => 3150,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 100,
            'color_id' => 3,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/e7fa4a4335/product100-1-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/6adfa1ef08/product100-2-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/298e78cf06/product100-3-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/f00a7838a1/product100-4-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/9178e9c548/product100-5-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/24b57599d2/product100-6-grey.jpg',
                'https://a.storyblok.com/f/186792/3000x1800/c72e3c4b76/product100-7-grey.jpg',
            ),
        ]);

        ProductColor::create([
            'price' => 260,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 101,
            'color_id' => 7,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/fc0bffd5d7/product101-1-white.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/5a003dce47/product101-2-white.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/690284fb83/product101-3-white.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/76379fe78d/product101-4-white.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 180,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 101,
            'color_id' => 4,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/ca4005c212/product101-1-black.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/c32be4b7a0/product101-2-black.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/c09eadd781/product101-3-black.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/e46d217dc6/product101-4-black.jpg',
            ),
        ]);

        ProductColor::create([
            'price' => 9000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 1,
            'color_id' => 3,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/2a60228020/product50-1-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/c9a16f4a38/product50-2-grey.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 8000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 1,
            'color_id' => 4,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/19abc5b127/product50-1-black.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/dea540aa9f/product50-2-black.jpg',
            ),
        ]);

        ProductColor::create([
            'price' => 12000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 2,
            'color_id' => 3,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/86480e1e8f/product51-1-grey.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/7d6eae5d17/product51-2-grey.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 11000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 2,
            'color_id' => 4,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/bd1b7c80b6/product51-1-black.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/16f7ba341e/product51-2-black.jpg',
            ),
        ]);
    }
}
