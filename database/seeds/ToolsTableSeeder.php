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

        \App\Tool::create([
            'naam' => 'HTML',
            'omschrijving' => 'Met HTML worden de pages van een website opgzet. het is het frame waarin de website gemaakt word.',
            'status_id' => 1
        ]);

        \App\Tool::create([
            'naam' => 'CSS',
            'omschrijving' => 'CSS word gebruikt voor het stylen en opmaken van een website. Met CSS worden de visuele eigenschappen van onderdelen aangepast',
            'status_id' => 1
        ]);
    }
}
