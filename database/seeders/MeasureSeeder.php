<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Measure;

class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's truncate our existing records to start from scratch.
        Measure::truncate();

        Measure::create([
            'id' => 1,
            'name' => 'шт.',
        ]);

        Measure::create([
            'id' => 2,
            'name' => 'пара',
        ]);
    }
}
