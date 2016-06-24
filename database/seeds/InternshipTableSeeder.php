<?php

use Illuminate\Database\Seeder;
use App\Internship;

class InternshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Internship::create([
            'soort_stage' => 'Eindstage',
            'begin_DATE' => '2016-06-13',
            'eind_DATE' => '2020-06-13',
            'contact_id' => 1,
            'status_id' => 1,
            'study_id' => 1

        ]);
    }
}
