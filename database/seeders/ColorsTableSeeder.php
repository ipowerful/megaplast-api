<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's truncate our existing records to start from scratch.
        Color::truncate();

        Color::create([
            'id' => 1,
            'name' => 'Желтый',
            'alias' => 'yellow',
        ]);

        Color::create([
            'id' => 2,
            'name' => 'Красный',
            'alias' => 'red',
        ]);

        Color::create([
            'id' => 3,
            'name' => 'Серый',
            'alias' => 'grey',
        ]);

        Color::create([
            'id' => 4,
            'name' => 'Черный',
            'alias' => 'black',
        ]);

        Color::create([
            'id' => 5,
            'name' => 'Зеленый',
            'alias' => 'green',
        ]);

        Color::create([
            'id' => 6,
            'name' => 'Синий',
            'alias' => 'blue',
        ]);

        Color::create([
            'id' => 7,
            'name' => 'Белый',
            'alias' => 'white',
        ]);

    }
}
