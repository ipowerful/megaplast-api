<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'Офис в Санкт-Петербурге',
            'phone' => '+7 (812) 309-26-29',
            'email' => 'support@megaplast-spb.ru',
            'address' => '196158, Санкт-Петербург, ул. Звездная, 12 офис 202',
            'telegram' => 'zzz',
            'whatsapp' => '777',
            'time_from' => '9:00 - 18:00',
            'days_from' => 'пн-пт',
            'time_to' => '9:00 - 18:00',
            'days_to' => 'сб-вс',
            'map_lat' => '59.831679',
            'map_long' => '30.345396',
            'map_zoom' => '16',
        ]);

        Contact::create([
            'name' => 'Склад в Ленинградской области',
            'phone' => '+7 (812) 309-26-29',
            'address' => '196158, Санкт-Петербург, ул. Звездная, 12 офис 202',
            'time_from' => '9:00 - 18:00',
            'days_from' => 'пн-пт',
            'time_to' => '9:00 - 18:00',
            'days_to' => 'сб-вс',
            'map_lat' => '59.831679',
            'map_long' => '30.345396',
            'map_zoom' => '16',
        ]);

        Contact::create([
            'name' => 'Склад в Ростовской области',
            'phone' => '+7 (812) 309-26-29',
            'address' => '196158, Санкт-Петербург, ул. Звездная, 12 офис 202',
            'time_from' => '9:00 - 18:00',
            'days_from' => 'пн-пт',
            'time_to' => '9:00 - 18:00',
            'days_to' => 'сб-вс',
            'map_lat' => '59.831679',
            'map_long' => '30.345396',
            'map_zoom' => '16',
        ]);
    }
}
