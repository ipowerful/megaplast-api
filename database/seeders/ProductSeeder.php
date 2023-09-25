<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's truncate our existing records to start from scratch.
//        Product::truncate();

        $product = Product::create([
            'id' => 108,
            'name' => 'Комбайн для сбора ягод 240*220*200 мм',
            'name_full' => 'Комбайн для сбора ягод, 240*220*200 мм, вес 0.4 кг, объем 6 л',
            'slug' => 'kombain_dlya_sbora_yagod__240x220x200_mm__ves_0.4_kg__obyem_6_l',
            'article' => '2302',
            'price' => 900,
            'price_old' => 0,
            'is_popular' => true,
            'stock_id' => 1,
            'measure_id' => 1,
            'category_id' => 1,
        ]);
        $product->industries()->attach([3, 4]);

        $product = Product::create([
            'id' => 107,
            'name' => 'Ящик штабелируемый 770*570*290 мм',
            'name_full' => 'Ящик штабелируемый, 770*570*290 мм, вес 3.5 кг, объем 127 л',
            'slug' => 'yaschik_shtabeliruemii__770x570x290_mm__ves_3.5_kg__obyem_127_l',
            'article' => '7529',
            'price' => 1250,
            'price_old' => 1000,
            'is_popular' => false,
            'stock_id' => 1,
            'measure_id' => 1,
            'category_id' => 1,
        ]);
        $product->industries()->attach(1);
    }
}
