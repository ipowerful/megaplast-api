<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's truncate our existing records to start from scratch.
        Unit::truncate();

        Unit::create([
            'id' => 1,
            'name' => 'шт.',
        ]);

        Unit::create([
            'id' => 2,
            'name' => 'пара',
        ]);
    }
}
