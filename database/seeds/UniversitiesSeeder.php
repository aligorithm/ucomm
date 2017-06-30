<?php

use Illuminate\Database\Seeder;
use App\University;

class UniversitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unilorin = University::create([
            'name' => 'University of Ilorin',
        ]);
    }
}
