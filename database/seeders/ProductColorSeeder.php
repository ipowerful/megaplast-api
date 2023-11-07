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
        ]);
        ProductColor::create([
            'id' => 2,
            'price' => 900,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 108,
            'color_id' => 2,
        ]);

        ProductColor::create([
            'id' => 3,
            'price' => 3960,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 1,
        ]);
        ProductColor::create([
            'id' => 4,
            'price' => 3960,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 2,
        ]);
        ProductColor::create([
            'id' => 5,
            'price' => 2500,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 3,
        ]);
        ProductColor::create([
            'id' => 6,
            'price' => 1250,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 107,
            'color_id' => 4,
        ]);

        ProductColor::create([
            'id' => 7,
            'price' => 210,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 2,
        ]);
        ProductColor::create([
            'id' => 8,
            'price' => 170,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 4,
        ]);
        ProductColor::create([
            'id' => 9,
            'price' => 180,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 3,
        ]);
        ProductColor::create([
            'id' => 10,
            'price' => 180,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 106,
            'color_id' => 5,
        ]);

        ProductColor::create([
            'id' => 11,
            'price' => 1950,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 105,
            'color_id' => 6,
        ]);
        ProductColor::create([
            'id' => 12,
            'price' => 1950,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 105,
            'color_id' => 4,
        ]);

        ProductColor::create([
            'id' => 13,
            'price' => 2250,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 104,
            'color_id' => 6,
        ]);
        ProductColor::create([
            'id' => 14,
            'price' => 2250,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 104,
            'color_id' => 4,
        ]);

        ProductColor::create([
            'id' => 15,
            'price' => 2500,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 103,
            'color_id' => 6,
        ]);
        ProductColor::create([
            'id' => 16,
            'price' => 2500,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 103,
            'color_id' => 4,
        ]);

        ProductColor::create([
            'id' => 17,
            'price' => 7500,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 102,
            'color_id' => 1,
        ]);
        ProductColor::create([
            'id' => 18,
            'price' => 7500,
            'price_old' => 0,
            'is_in_stock' => false,
            'product_id' => 102,
            'color_id' => 6,
        ]);

        ProductColor::create([
            'id' => 19,
            'price' => 3150,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 100,
            'color_id' => 3,
        ]);

        ProductColor::create([
            'id' => 20,
            'price' => 260,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 101,
            'color_id' => 7,
        ]);
        ProductColor::create([
            'id' => 21,
            'price' => 180,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 101,
            'color_id' => 4,
        ]);

        ProductColor::create([
            'id' => 22,
            'price' => 9000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 1,
            'color_id' => 3,
        ]);
        ProductColor::create([
            'id' => 23,
            'price' => 8000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 1,
            'color_id' => 4,
        ]);

        ProductColor::create([
            'id' => 24,
            'price' => 12000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 2,
            'color_id' => 3,
        ]);
        ProductColor::create([
            'id' => 25,
            'price' => 11000,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 2,
            'color_id' => 4,
        ]);

        ProductColor::create([
            'id' => 26,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 3,
            'color_id' => 2,
        ]);
        ProductColor::create([
            'id' => 27,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 3,
            'color_id' => 8,
        ]);
        ProductColor::create([
            'id' => 28,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 3,
            'color_id' => 6,
        ]);

        ProductColor::create([
            'id' => 29,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 201,
            'color_id' => 2,
        ]);
        ProductColor::create([
            'id' => 30,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 201,
            'color_id' => 6,
        ]);
        ProductColor::create([
            'id' => 31,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 201,
            'color_id' => 5,
        ]);

        ProductColor::create([
            'id' => 32,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 202,
            'color_id' => 6,
        ]);
        ProductColor::create([
            'id' => 33,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 202,
            'color_id' => 3,
        ]);
        ProductColor::create([
            'id' => 34,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 202,
            'color_id' => 8,
        ]);

        ProductColor::create([
            'id' => 35,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 2,
        ]);
        ProductColor::create([
            'id' => 36,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 6,
        ]);
        ProductColor::create([
            'id' => 37,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 3,
        ]);
        ProductColor::create([
            'id' => 38,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 203,
            'color_id' => 4,
        ]);

        ProductColor::create([
            'id' => 39,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 204,
            'color_id' => 2,
        ]);
        ProductColor::create([
            'id' => 40,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 204,
            'color_id' => 8,
        ]);
        ProductColor::create([
            'id' => 41,
            'price' => 78,
            'price_old' => 0,
            'is_in_stock' => true,
            'product_id' => 204,
            'color_id' => 3,
        ]);
    }
}
