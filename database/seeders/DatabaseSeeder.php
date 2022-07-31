<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Kategorija::create([
            'naziv' => 'City Cars',
            'opis' => 'Cars for easy city manoeuvring with good economy and easy driving characteristics.'
        ]);

        \App\Models\Automobil::create([
            'naziv' => 'Renault Clio',
            'opis' => 'Small hatchback, comfortable economic city car with plenty of fun and easy driving character.',
            'cena' => 150,
            'slika' => 'tesla.jpg',
            'kategorija_id' => 1
        ]);
    }
}
