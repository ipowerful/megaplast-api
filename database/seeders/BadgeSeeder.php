<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Badge;

class BadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's truncate our existing records to start from scratch.
        Badge::truncate();

        Badge::create([
            'id' => 1,
            'name' => 'Новинка',
            'color_id' => 5,
        ]);

        Badge::create([
            'id' => 2,
            'name' => 'Лучшая цена',
            'color_id' => 1,
        ]);

        Badge::create([
            'id' => 3,
            'name' => 'Хит',
            'color_id' => 2,
        ]);
    }
}
