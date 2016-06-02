<?php

use Illuminate\Database\Seeder;

class SchoolLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolLocation::create([
            'streetname' => 'Posthumalaan',
            'postcode' => '1234 AB',
            'location' => 'Rotterdam',
            'school_id' => 1
        ]);
    }
}
