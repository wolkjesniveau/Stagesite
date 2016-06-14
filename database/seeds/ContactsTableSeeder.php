<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Contacts::create([
            'surname' => 'van der Hilst',
            'name' => 'Vince',
            'email' => 'vvanderhilst@gmail.com',
            'tel' => '+181418267',
            'mobile' => '+31614562609',
            'company_id'=> 1

        ]);
    }
}
