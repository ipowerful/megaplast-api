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
            'alias' => 'in',
            'color' => 'green',
        ]);

        Stock::create([
            'id' => 2,
            'alias' => 'out',
            'name' => 'Под заказ',
            'color' => 'red',
        ]);
    }
}
