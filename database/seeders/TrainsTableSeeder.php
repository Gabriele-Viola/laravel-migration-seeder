<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain = new Train();
        $newTrain->corporate = 'Trenitalia';
        $newTrain->code = '9096';
        $newTrain->coach = '10';
        $newTrain->departures = 'Milano Centrale';
        $newTrain->departures_time = '07:45';
        $newTrain->arrives = 'Napoli';
        $newTrain->arrives_time = '12:15';
        $newTrain->on_time = 1;
        $newTrain->delete = 0;
        $newTrain->date = '2025-12-25';
        // $newTrain->created_at = 'NOW()';
        // $newTrain->updated_at = 'NOW()';
        $newTrain->save();
    }
}
