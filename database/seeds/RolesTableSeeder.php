<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Guest'
        ]);
        Role::create([
            'name' => 'Stagier'
        ]);
        Role::create([
            'name' => 'PraktijkBegeleider'
        ]);
        Role::create([
            'name' => 'Docent'
        ]);
    }
}
