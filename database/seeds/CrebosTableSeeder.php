<?php

use Illuminate\Database\Seeder;

class CrebosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Crebo::create([
            'name' => 'Media',
            'number' => 1
        ]);
    }
}
