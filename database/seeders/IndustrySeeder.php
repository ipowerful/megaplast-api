<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Industry;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Let's truncate our existing records to start from scratch.
//        Industry::truncate();

        Industry::create([
            'id' => 1,
            'name' => 'Птицеводство',
            'slug' => 'pticevodstvo',
            'image' => 'industry1.jpg',
            'text' => 'Производство пластмасовой многооборотной тары: разновысотные пластиковые ящики, лотки, поддоны, ячейки. ',
        ]);

        Industry::create([
            'id' => 2,
            'name' => 'Хлебопекарная промышленность',
            'slug' => 'hlebopekarnaya-promyshlennost',
            'image' => 'industry2.jpg',
            'text' => 'Производство пластмасовой многооборотной тары: разновысотные пластиковые ящики, лотки, поддоны, ячейки. ',
        ]);

        Industry::create([
            'id' => 3,
            'name' => 'Ягоды и грибы',
            'slug' => 'yagody-i-griby',
            'image' => 'industry3.jpg',
            'text' => 'Производство пластмасовой многооборотной тары: разновысотные пластиковые ящики, лотки, поддоны, ячейки. ',
        ]);

        Industry::create([
            'id' => 4,
            'name' => 'Агропромышленный комплекс',
            'slug' => 'agropromyshlennyy-kompleks',
            'image' => 'industry4.jpg',
            'text' => 'Производство пластмасовой многооборотной тары: разновысотные пластиковые ящики, лотки, поддоны, ячейки. ',
        ]);

        Industry::create([
            'id' => 5,
            'name' => 'Мясоперерабатывающая промышленность',
            'slug' => 'myasopererabatyvayushchaya-promyshlennost',
            'image' => 'industry5.jpg',
            'text' => 'Производство пластмасовой многооборотной тары: разновысотные пластиковые ящики, лотки, поддоны, ячейки. ',
        ]);

    }
}
