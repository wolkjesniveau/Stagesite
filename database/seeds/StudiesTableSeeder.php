<?php

use Illuminate\Database\Seeder;

class StudiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Study::create([
            'name_study' => 'Media ontwikkerlaar',
            'school_location_id' => 1,
            'cohort_id' => 1,
            'crebo_id' => 1
        ]);
    }
}
