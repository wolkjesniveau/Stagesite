<?php

use Illuminate\Database\Seeder;

class CohortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Cohort::create([
            'name' => 'Media2',
            'schoolyear' => 'Year 2',
        ]);
    }
}