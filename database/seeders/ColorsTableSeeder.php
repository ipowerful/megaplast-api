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
            'slug' => 'yellow',
        ]);

        Color::create([
            'id' => 2,
            'name' => 'Красный',
            'slug' => 'red',
        ]);

        Color::create([
            'id' => 3,
            'name' => 'Серый',
            'slug' => 'grey',
        ]);

        Color::create([
            'id' => 4,
            'name' => 'Черный',
            'slug' => 'black',
        ]);

        Color::create([
            'id' => 5,
            'name' => 'Зеленый',
            'slug' => 'green',
        ]);

        Color::create([
            'id' => 6,
            'name' => 'Синий',
            'slug' => 'blue',
        ]);

        Color::create([
            'id' => 7,
            'name' => 'Белый',
            'slug' => 'white',
        ]);

        Color::create([
            'id' => 8,
            'name' => 'Оранжевый',
            'slug' => 'orange',
        ]);
    }
}
