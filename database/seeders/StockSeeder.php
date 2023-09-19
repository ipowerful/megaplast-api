<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's truncate our existing records to start from scratch.
        Stock::truncate();

        Stock::create([
            'id' => 1,
            'name' => 'В наличии',
            'slug' => 'in',
            'color_id' => 5,
        ]);

        Stock::create([
            'id' => 2,
            'slug' => 'out',
            'name' => 'Под заказ',
            'color_id' => 2,
        ]);
    }
}
