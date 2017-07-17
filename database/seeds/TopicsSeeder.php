<?php

use Illuminate\Database\Seeder;
use App\Topic;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tech = Topic::create([
            'name' => 'Tech',
        ]);
        $art = Topic::create([
            'name' => 'art',
        ]);
    }
}
