<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

class TrainsTableSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 50; $i++) { 
            $newTrains = new Train();
            $newTrains->codice = $faker->unique()->bothify('###???');
            $newTrains->azienda = $faker->company;
            $newTrains->stazione_partenza = $faker->city;
            $newTrains->stazione_arrivo = $faker->city;
            $newTrains->data = $faker->date();
            $newTrains->orario_partemza = $faker->time();
            $newTrains->orario_arrivo = $faker->time();
            $newTrains->num_carrozze = $faker->numberBetween(5, 15);
            $newTrains->in_orario = $faker->boolean(10);
            $newTrains->cancellato = $faker->boolean(10);
            
            $newTrains->save();
        }
    }
}