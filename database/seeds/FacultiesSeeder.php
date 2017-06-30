<?php

use Illuminate\Database\Seeder;
use App\Faculty;

class FacultiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agric = Faculty::create([
            'name' => 'Faculty of Agricultural Sciences',
            'about' => '',
            'university_id' => 1,
        ]);
        $arts = Faculty::create([
            'name' => 'Faculty of Arts',
            'about' => '',
            'university_id' => 1,
        ]);
        $medsci = Faculty::create([
            'name' => 'Faculty of Basic Medical Sciences',
            'about' => '',
            'university_id' => 1,
        ]);
        $clinisci = Faculty::create([
            'name' => 'Faculty of Clinical Sciences',
            'about' => '',
            'university_id' => 1,
        ]);
        $cis = Faculty::create([
            'name' => 'Faculty of Communication and Information Sciences',
            'about' => '',
            'university_id' => 1,
        ]);
        $edu = Faculty::create([
            'name' => 'Faculty of Education',
            'about' => '',
            'university_id' => 1,
        ]);
        $engine = Faculty::create([
            'name' => 'Faculty of Engineering and Technology',
            'about' => '',
            'university_id' => 1,
        ]);
        $environment = Faculty::create([
            'name' => 'Faculty of Environmental Sciences',
            'about' => '',
            'university_id' => 1,
        ]);
        $law = Faculty::create([
            'name' => 'Faculty of Law',
            'about' => '',
            'university_id' => 1,
        ]);
        $life = Faculty::create([
            'name' => 'Faculty of Life Sciences',
            'about' => '',
            'university_id' => 1,
        ]);
        $management = Faculty::create([
            'name' => 'Faculty of Management Sciences',
            'about' => '',
            'university_id' => 1,
        ]);
        $pharmacy = Faculty::create([
            'name' => 'Faculty of Pharmaceutical Sciences',
            'about' => '',
            'university_id' => 1,
        ]);
        $physical = Faculty::create([
        'name' => 'Faculty of Physical Sciences',
        'about' => '',
        'university_id' => 1,
        ]);
        $social = Faculty::create([
            'name' => 'Faculty of Social Sciences',
            'about' => '',
            'university_id' => 1,
        ]);
        $vet = Faculty::create([
            'name' => 'Faculty of Veterinary Medicine',
            'about' => '',
            'university_id' => 1,
        ]);
    }
}
