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
                    '4_12800-o-o.jpg', // нет 4го изображения
                    '5_12800-o-o.jpg',
                ],
            ],
            (object)[
                'id' => 12,
                'images' => [
                    '1_12800-a-e.jpg',
                    '2_12800-a-e.jpg',
                    '3_12800-a-e.jpg',
                    '4_12800-a-e.jpg',
                    '5_12800-a-e.jpg',
                ],
            ],
        ];
        ImageSeeder::createImage($items);

    }

    public function createImage($items): void
    {
        foreach ($items as $item) {
            $index = 1;
            foreach ($item->images as $image) {
                Image::create([
                    'product_color_id' => $item->id,
                    'image' => '/images/product/' . $image,
                    'sort_order' => $index,
                ]);
                $index++;
            }
        }
    }
}
