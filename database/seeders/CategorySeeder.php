<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's truncate our existing records to start from scratch.
        Category::truncate();

        Category::create([
            'id' => 1,
            'name' => 'Пластиковые ящики',
            'slug' => 'plastikovye-jashhiki',
            'image' => 'purpose1',
        ]);

        Category::create([
            'id' => 2,
            'name' => 'Паллеты, поддоны',
            'slug' => 'pallety-poddony',
            'image' => 'purpose2',
        ]);

        Category::create([
            'id' => 3,
            'name' => 'Решетки, ячейки',
            'slug' => 'reshetki-yachejki',
            'image' => 'purpose3',
        ]);

        Category::create([
            'id' => 4,
            'name' => 'Одноразовая спецодежда',
            'slug' => 'odnorazovaya-specodezhda',
            'image' => 'purpose4',
        ]);
    }
}
