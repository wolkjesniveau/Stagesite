<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Company::create([
            'naam' => 'MacDonalds',
            'address' => 'Beursplein 21',
            'postcode' => '1234 XD',
            'plaats' => 'Rotterdam',
            'telnr' => '+1045019249'
        ]);
    }
}
