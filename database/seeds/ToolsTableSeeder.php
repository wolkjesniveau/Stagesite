<?php

use Illuminate\Database\Seeder;

class ToolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tool::create([
            'naam' => 'PHP',
            'omschrijving' => 'PHP is een programmeertaal die gebruikt word bij het maken van websites en webgebaseerde applicaties',
            'status_id' => 1
        ]);
    }
}
