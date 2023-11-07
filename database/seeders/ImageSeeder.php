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


        Image::create([
            'product_color_id' => 5,
            'image' => '/images/product/product107-1-grey.jpg',
            'sort_order' => 1,
        ]);
        Image::create([
            'product_color_id' => 5,
            'image' => '/images/product/product107-2-grey.jpg',
            'sort_order' => 2,
        ]);
        Image::create([
            'product_color_id' => 5,
            'image' => '/images/product/product107-3-grey.jpg',
            'sort_order' => 3,
        ]);
        Image::create([
            'product_color_id' => 5,
            'image' => '/images/product/product107-4-grey.jpg',
            'sort_order' => 4,
        ]);


        Image::create([
            'product_color_id' => 6,
            'image' => '/images/product/product107-1-black.jpg',
            'sort_order' => 1,
        ]);
        Image::create([
            'product_color_id' => 6,
            'image' => '/images/product/product107-2-black.jpg',
            'sort_order' => 2,
        ]);
        Image::create([
            'product_color_id' => 6,
            'image' => '/images/product/product107-3-black.jpg',
            'sort_order' => 3,
        ]);
        Image::create([
            'product_color_id' => 6,
            'image' => '/images/product/product107-4-black.jpg',
            'sort_order' => 4,
        ]);


        Image::create([
            'product_color_id' => 7,
            'image' => '/images/product/1_64151.jpg',
            'sort_order' => 1,
        ]);
        Image::create([
            'product_color_id' => 7,
            'image' => '/images/product/2_64151.jpg',
            'sort_order' => 2,
        ]);
        Image::create([
            'product_color_id' => 7,
            'image' => '/images/product/3_64151.jpg',
            'sort_order' => 3,
        ]);
        Image::create([
            'product_color_id' => 7,
            'image' => '/images/product/4_64151.jpg',
            'sort_order' => 4,
        ]);
        Image::create([
            'product_color_id' => 7,
            'image' => '/images/product/5_64151.jpg',
            'sort_order' => 5,
        ]);


        $items = [
            (object)[
                'id' => 8,
                'images' => [
                    '1_64151-a-e.jpg',
                    '2_64151-a-e.jpg',
                    '3_64151-a-e.jpg',
                    '4_64151-a-e.jpg',
                    '5_64151-a-e.jpg',
                ],
            ],
            (object)[
                'id' => 9,
                'images' => [
                    '1_64151-ae.jpg',
                    '2_64151-ae.jpg',
                    '3_64151-ae.jpg',
                    '4_64151-ae.jpg',
                    '5_64151-ae.jpg',
                ],
            ],
            (object)[
                'id' => 10,
                'images' => [
                    '1_64151-e.jpg',
                    '2_64151-e.jpg',
                    '3_64151-e.jpg',
                    '4_64151-e.jpg',
                    '5_64151-e.jpg',
                ],
            ],

            (object)[
                'id' => 11,
                'images' => [
                    '1_12800-o-o.jpg',
                    '2_12800-o-o.jpg',
                    '3_12800-o-o.jpg',
                    '4_12800-o-o.jpg',
                ],
            ],
            (object)[
                'id' => 12,
                'images' => [
                    '1_12800-a-e.jpg',
                    '2_12800-a-e.jpg',
                    '3_12800-a-e.jpg',
                    '4_12800-a-e.jpg',
                ],
            ],

            (object)[
                'id' => 13,
                'images' => [
                    '1_12801-o-o.jpg',
                    '2_12801-o-o.jpg',
                    '3_12801-o-o.jpg',
                    '4_12801-o-o.jpg',
                ],
            ],
            (object)[
                'id' => 14,
                'images' => [
                    '1_12801-a-e.jpg',
                    '2_12801-a-e.jpg',
                    '3_12801-a-e.jpg',
                    '4_12801-a-e.jpg',
                ],
            ],

            (object)[
                'id' => 15,
                'images' => [
                    '1_12100-o-o.jpg',
                    '2_12100-o-o.jpg', // нет изображения
                    '3_12100-o-o.jpg',
                    '4_12100-o-o.jpg',
                ],
            ],
            (object)[
                'id' => 16,
                'images' => [
                    '1_12100-a-e.jpg',
                    '2_12100-a-e.jpg',
                    '3_12100-a-e.jpg',
                    '4_12100-a-e.jpg',
                ],
            ],

            (object)[
                'id' => 17,
                'imageBase' => '{id}_11725-yellow.jpg',
                'imageCount' => 5,
            ],
            (object)[
                'id' => 18,
                'imageBase' => '{id}_11725-blue.jpg',
                'imageCount' => 5,
            ],

            (object)[
                'id' => 19,
                'imageBase' => 'product100-{id}-grey.jpg',
                'imageCount' => 7,
            ],

            (object)[
                'id' => 20,
                'imageBase' => 'product101-{id}-white.jpg',
                'imageCount' => 4,
            ],
            (object)[
                'id' => 21,
                'imageBase' => 'product101-{id}-black.jpg',
                'imageCount' => 4,
            ],

            (object)[
                'id' => 22,
                'imageBase' => 'product50-{id}-grey.jpg',
                'imageCount' => 2,
            ],
            (object)[
                'id' => 23,
                'imageBase' => 'product50-{id}-black.jpg',
                'imageCount' => 2,
            ],

            (object)[
                'id' => 24,
                'imageBase' => 'product51-{id}-grey.jpg',
                'imageCount' => 2,
            ],
            (object)[
                'id' => 25,
                'imageBase' => 'product51-{id}-black.jpg',
                'imageCount' => 2,
            ],

            (object)[
                'id' => 26,
                'imageBase' => '{id}_jumbo-2-0.jpg',
                'imageCount' => 5,
            ],
            (object)[
                'id' => 27,
                'imageBase' => '{id}_jumbo-2-0-ae.jpg',
                'imageCount' => 5,
            ],
            (object)[
                'id' => 28,
                'imageBase' => '{id}_jumbo-2-0-o-o.jpg', // нет 5 изображения
                'imageCount' => 5,
            ],
        ];
        ImageSeeder::createImage($items);

    }

    public function createImage($items): void
    {
        foreach ($items as $item) {
            $index = 1;

            if (isset($item->images)) {

                foreach ($item->images as $image) {
                    Image::create([
                        'product_color_id' => $item->id,
                        'image' => '/images/product/' . $image,
                        'sort_order' => $index,
                    ]);
                    $index++;
                }
            } else {
                for ($i = 1; $i <= $item->imageCount; $i++) {
                    Image::create([
                        'product_color_id' => $item->id,
                        'image' => '/images/product/' . str_replace('{id}', $index, $item->imageBase),
                        'sort_order' => $index,
                    ]);
                    $index++;
                }
            }
        }
    }
}
