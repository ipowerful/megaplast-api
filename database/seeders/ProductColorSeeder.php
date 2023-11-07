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

        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 3,
            'color_id' => 2,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/fac757f355/1_jumbo-2-0.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/92ed2f4ac4/2_jumbo-2-0.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/6af9369e4b/3_jumbo-2-0.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/ea7261c508/4_jumbo-2-0.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/0c572bc6ab/5_jumbo-2-0.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 3,
            'color_id' => 8,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/de21f1f10b/1_jumbo-2-0-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/037ae86334/2_jumbo-2-0-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/6e1ad30784/3_jumbo-2-0-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/d2601be959/4_jumbo-2-0-ae.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/540dc2556c/5_jumbo-2-0-ae.jpg',
            ),
        ]);
        ProductColor::create([
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 3,
            'color_id' => 6,
            'images' => array(
                'https://a.storyblok.com/f/186792/2000x2000/f47f2e91ca/1_jumbo-2-0-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/e029c1eb7c/2_jumbo-2-0-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/aee7c2d027/3_jumbo-2-0-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/01875776d1/4_jumbo-2-0-o-o.jpg',
                'https://a.storyblok.com/f/186792/2000x2000/e029c1eb7c/2_jumbo-2-0-o-o.jpg',
            ),
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
