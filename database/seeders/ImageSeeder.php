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
        $items = [
            (object)[
                'id' => 1,
                'imageBase' => 'product108-{id}-grey.jpg',
                'imageCount' => 4,
            ],
            (object)[
                'id' => 2,
                'imageBase' => 'product108-{id}-red.jpg',
                'imageCount' => 4,
            ],

            (object)[
                'id' => 3,
                'imageBase' => 'product107-{id}-yellow.jpg',
                'imageCount' => 4,
            ],
            (object)[
                'id' => 4,
                'imageBase' => 'product107-{id}-red.jpg',
                'imageCount' => 4,
            ],
            (object)[
                'id' => 5,
                'imageBase' => 'product107-{id}-grey.jpg',
                'imageCount' => 4,
            ],
            (object)[
                'id' => 6,
                'imageBase' => 'product107-{id}-black.jpg',
                'imageCount' => 4,
            ],

            (object)[
                'id' => 7,
                'imageBase' => '{id}_64151.jpg',
                'imageCount' => 5,
            ],

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

            (object)[
                'id' => 29,
                'imageBase' => '{id}_e2.jpg',
                'imageCount' => 5,
            ],
            (object)[
                'id' => 30,
                'imageBase' => '{id}_e2.jpg',
                'imageCount' => 5,
            ],
            (object)[
                'id' => 31,
                'imageBase' => '{id}_e2-e.jpg',
                'imageCount' => 5,
            ],

            (object)[
                'id' => 32,
                'imageBase' => '{id}_3305-o-o.jpg',
                'imageCount' => 5,
            ],
            (object)[
                'id' => 33,
                'imageBase' => '{id}_3305-ae.jpg',
                'imageCount' => 5,
            ],
            (object)[
                'id' => 34,
                'imageBase' => '{id}_3305-ae-yellow.jpg',
                'imageCount' => 5,
            ],

            (object)[
                'id' => 35,
                'imageBase' => '{id}_6415.jpg',
                'imageCount' => 5,
            ],
            (object)[
                'id' => 36,
                'imageBase' => '{id}_6415-o-o.jpg',
                'imageCount' => 5,
            ],
            (object)[
                'id' => 37,
                'imageBase' => '{id}_6415-ae.jpg', // нет 3 изображения
                'imageCount' => 5,
            ],
            (object)[
                'id' => 38,
                'imageBase' => '{id}_6415-a-e.jpg',
                'imageCount' => 5,
            ],

            (object)[
                'id' => 39,
                'imageBase' => '{id}_6420.jpg',
                'imageCount' => 6,
            ],
            (object)[
                'id' => 40,
                'imageBase' => '{id}_6420-ae.jpg',
                'imageCount' => 6,
            ],
            (object)[
                'id' => 41,
                'imageBase' => '{id}_6420-a-e.jpg',
                'imageCount' => 6,
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
                        'filename' => '/images/product/' . $image,
                        'sort_order' => $index,
                    ]);
                    $index++;
                }
            } else {
                for ($i = 1; $i <= $item->imageCount; $i++) {
                    Image::create([
                        'product_color_id' => $item->id,
                        'filename' => '/images/product/' . str_replace('{id}', $index, $item->imageBase),
                        'sort_order' => $index,
                    ]);
                    $index++;
                }
            }
        }
    }
}
