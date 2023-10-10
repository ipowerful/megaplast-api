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
        $product = Product::create([
            'id' => 108,
            'name' => 'Комбайн для сбора ягод 240*220*200 мм',
            'name_full' => 'Комбайн для сбора ягод, 240*220*200 мм, вес 0.4 кг, объем 6 л',
            'slug' => 'kombain_dlya_sbora_yagod__240x220x200_mm__ves_0.4_kg__obyem_6_l',
            'article' => '2302',
            'price' => 900,
            'price_old' => 0,
            'is_popular' => true,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 1,
        ]);
        $product->industries()->attach([3, 4]);
        $product->badges()->attach([1, 2]);

        $product = Product::create([
            'id' => 107,
            'name' => 'Ящик штабелируемый 770*570*290 мм',
            'name_full' => 'Ящик штабелируемый, 770*570*290 мм, вес 3.5 кг, объем 127 л',
            'slug' => 'yaschik_shtabeliruemii__770x570x290_mm__ves_3.5_kg__obyem_127_l',
            'article' => '7529',
            'price' => 1250,
            'price_old' => 5000,
            'is_popular' => true,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 1,
        ]);
        $product->industries()->attach(1);
        $product->badges()->attach(3);

        $product = Product::create([
            'id' => 106,
            'name' => 'Ящик вкладываемый 600*400*152 мм',
            'name_full' => 'Ящик вкладываемый, 600*400*152 мм, вес 1.68 кг, объем 36 л',
            'slug' => 'yaschik_vkladivaemii___600x400x152_mm__ves_1.68_kg__obyem_36_l',
            'article' => '64151',
            'price' => 170,
            'price_old' => 0,
            'is_popular' => true,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 1,
        ]);
        $product->industries()->attach([2, 4]);

        $product = Product::create([
            'id' => 105,
            'name' => 'Решетка для заморозки 1200*800*50 мм',
            'name_full' => 'Решетка для заморозки, 1200*800*50 мм, вес 1.68 кг',
            'slug' => 'reshetka_dlya_zamorozki__1200x800x50_mm__ves_1.68_kg',
            'article' => '12800',
            'price' => 1950,
            'price_old' => 0,
            'is_popular' => true,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 3,
        ]);
        $product->industries()->attach([5]);

        $product = Product::create([
            'id' => 104,
            'name' => 'Решетка для заморозки 1200*800*50 мм',
            'name_full' => 'Решетка для заморозки, 1200*800*50 мм, вес 2.15 кг',
            'slug' => 'reshetka_dlya_zamorozki__1200x800x50_mm__ves_2.15_kg',
            'article' => '12801',
            'price' => 2250,
            'price_old' => 0,
            'is_popular' => true,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 3,
        ]);
        $product->industries()->attach([5]);

        $product = Product::create([
            'id' => 103,
            'name' => 'Решетка для заморозки 1200*1000*50 мм',
            'name_full' => 'Решетка для заморозки, 1200*1000*50 мм, вес 2.73 кг',
            'slug' => 'reshetka_dlya_zamorozki__1200x1000x50_mm__ves_2.73_kg',
            'article' => '12100',
            'price' => 2500,
            'price_old' => 0,
            'is_popular' => true,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 3,
        ]);
        $product->industries()->attach([5]);

        $product = Product::create([
            'id' => 102,
            'name' => 'Ящик штабелируемый 1165*775*255 мм',
            'name_full' => 'Ящик штабелируемый, 1165*775*255 мм, вес 9.6 кг, объем 230 л',
            'slug' => 'yaschik_shtabeliruemii__1165x775x255_mm__ves_9.6_kg__obyem_230_l',
            'article' => '11725',
            'price' => 7500,
            'price_old' => 0,
            'is_popular' => false,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 1,
        ]);
        $product->industries()->attach([1, 4]);

        $product = Product::create([
            'id' => 100,
            'name' => 'Дивайдер 1200*900*57 мм',
            'name_full' => 'Дивайдер, 1200*900*57 мм, вес 3.58 кг',
            'slug' => 'divaider__1200x900x57_mm__ves_3.58_kg',
            'article' => '1293',
            'price' => 3150,
            'price_old' => 0,
            'is_popular' => false,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 2,
        ]);
        $product->industries()->attach([1]);

        $product = Product::create([
            'id' => 101,
            'name' => 'Ящик штабелируемый 600*400*135 мм',
            'name_full' => 'Ящик штабелируемый, 600*400*135 мм, вес 1.15 кг, объем 32.4 л',
            'slug' => 'yaschik_shtabeliruemii__600x400x135_mm__ves_1.15_kg__obyem_32.4_l',
            'article' => '6413',
            'price' => 180,
            'price_old' => 0,
            'is_popular' => false,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 1,
        ]);
        $product->industries()->attach([3, 4]);

        $product = Product::create([
            'id' => 1,
            'name' => 'Поддон 1200*900*140 мм',
            'name_full' => 'Поддон, 1200*900*140 мм, вес 12.1 кг, штабелируемый на ножках',
            'slug' => 'poddon__1200x900x140_mm__ves_12.1_kg__shtabeliruemii_na_nozhkah',
            'article' => '12960',
            'price' => 8000,
            'price_old' => 0,
            'is_popular' => false,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 2,
        ]);
        $product->industries()->attach([1]);

        $product = Product::create([
            'id' => 2,
            'name' => 'Поддон 1200*900*162 мм',
            'name_full' => 'Поддон, 1200*900*162 мм, вес 18.5 кг, штабелируемый на лыжах',
            'slug' => 'poddon__1200x900x162_mm__ves_18.5_kg__shtabeliruemii_na_lizhah',
            'article' => '12961',
            'price' => 11000,
            'price_old' => 0,
            'is_popular' => false,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 2,
        ]);
        $product->industries()->attach([1]);

        $product = Product::create([
            'id' => 3,
            'name' => 'Ячейка под яйцо 298*298*50 мм',
            'name_full' => 'Ячейка под яйцо, 298*298*50 мм, вес 18.5 кг, для яиц до 90 гр',
            'slug' => 'yacheika_pod_yaitso__298x298x50_mm__ves_18.5_kg__dlya_yaits_do_90_gr',
            'article' => 'Jumbo 2.0',
            'price' => 78,
            'price_old' => 0,
            'is_popular' => false,
            'is_in_stock' => true,
            'measure_id' => 1,
            'category_id' => 3,
        ]);
        $product->industries()->attach([1]);

//        $product = Product::create([
//            'id' => 201,
//            'name' => 'Ящик E2, 600*400*200 мм',
//            'name_full' => 'Ящик E2, 600*400*200 мм, 2.0 кг, штабелируемый, сплошной',
//            'slug' => 'yaschik_e2__600x400x200_mm__2.0_kg__shtabeliruemii__sploshnoi',
//            'article' => 'E2',
//            'price' => 78,
//            'price_old' => 0,
//            'is_popular' => false,
//            'is_in_stock' => true,
//            'measure_id' => 1,
//            'category_id' => 1,
//        ]);
//        $product->industries()->attach([5]);
//
//        $product = Product::create([
//            'id' => 202,
//            'name' => 'Ячейка под яйцо, классическая 298*298*50 мм',
//            'name_full' => 'Ячейка под яйцо, классическая, 298*298*50 мм, вес 0.14 кг, для яиц весом до 90 гр',
//            'slug' => 'yacheika_pod_yaitso__klassicheskaya__298x298x50_mm__ves_0.14_kg__dlya_yaits_vesom_do_90_gr',
//            'article' => '3305',
//            'price' => 78,
//            'price_old' => 0,
//            'is_popular' => false,
//            'is_in_stock' => true,
//            'measure_id' => 1,
//            'category_id' => 3,
//        ]);
//        $product->industries()->attach([1]);
//
//        $product = Product::create([
//            'id' => 203,
//            'name' => 'Ящик вкладываемый, 600*400*152 мм',
//            'name_full' => 'Ящик вкладываемый, 600*400*152 мм, 1.35 кг. Евролоток',
//            'slug' => 'yaschik_vkladivaemii__600x400x152_mm__1.35_kg._evrolotok',
//            'article' => '6415',
//            'price' => 78,
//            'price_old' => 0,
//            'is_popular' => false,
//            'is_in_stock' => false,
//            'measure_id' => 1,
//            'category_id' => 1,
//        ]);
//        $product->industries()->attach([2]);
//
//        $product = Product::create([
//            'id' => 204,
//            'name' => 'Ящик вкладываемый, 600*400*200 мм',
//            'name_full' => 'Ящик вкладываемый, 600*400*200 мм, 1.7 кг, тяжелый',
//            'slug' => 'yaschik_vkladivaemii__600x400x200_mm__1.7_kg__tyazhelii',
//            'article' => '6420',
//            'price' => 78,
//            'price_old' => 0,
//            'is_popular' => false,
//            'is_in_stock' => false,
//            'measure_id' => 1,
//            'category_id' => 1,
//        ]);
//        $product->industries()->attach([2, 4]);
    }
}
