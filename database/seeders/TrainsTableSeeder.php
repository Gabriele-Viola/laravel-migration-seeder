<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $newTrain = new Train();
        // $newTrain->corporate = 'Trenitalia';
        // $newTrain->code = '9096';
        // $newTrain->coach = '10';
        // $newTrain->departures = 'Milano Centrale';
        // $newTrain->departures_time = '07:45';
        // $newTrain->arrives = 'Napoli';
        // $newTrain->arrives_time = '12:15';
        // $newTrain->on_time = 1;
        // $newTrain->delete = 0;
        // $newTrain->date = '2025-12-25';


        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->corporate = $faker->company();
            $newTrain->code = $faker->numerify('9###');
            $newTrain->coach = $faker->numberBetween(5, 15);
            $newTrain->departures = $faker->city();
            $newTrain->departures_time = $faker->time();
            $newTrain->arrives = $faker->city();
            $newTrain->arrives_time = $faker->time();
            $newTrain->on_time = $faker->boolean();
            $newTrain->delete = $faker->boolean();
            $newTrain->date = $faker->date();
            $newTrain->save();
        }
    }
}
