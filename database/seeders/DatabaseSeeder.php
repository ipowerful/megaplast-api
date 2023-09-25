<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ColorsTableSeeder::class);
        $this->call(StockSeeder::class);
        $this->call(IndustrySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(MeasureSeeder::class);
        $this->call(ParameterSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BadgeSeeder::class);
    }
}
