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
        DB::table('Studies')->insert([
            'education_id' => 1,
            'location_id' => 1,
            'cohort_id' => 1
        ]);
    }
}
