<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\FacultiesSeeder::class);
        $this->call(\UniversitiesSeeder::class);
        $this->call(\TopicsSeeder::class);
    }
}
