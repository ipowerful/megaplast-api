<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Parameter;

class ParameterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's truncate our existing records to start from scratch.
        Parameter::truncate();

        Parameter::create([
            'id' => 1,
            'name' => 'Вес',
            'units' => 'кг',
        ]);

        Parameter::create([
            'id' => 2,
            'name' => 'Объем',
            'units' => 'л',
        ]);

        Parameter::create([
            'id' => 3,
            'name' => 'Тип',
            'units' => '',
        ]);
    }
}
