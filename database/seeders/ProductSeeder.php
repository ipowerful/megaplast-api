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
        Product::truncate();

        Product::create([
            'id' => 1,
            'name' => 'Ящик',
            'alias' => 'box',
            'stock_id' => 1,
            'unit_id' => 1,
        ]);
    }
}
