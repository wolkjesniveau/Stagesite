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
        \App\User::create([
            'name' => 'Vince',
            'surname' => 'van der Hilst',
            'email' => 'vvanderhilst@gmail.com',
            'tel' => '+181418267',
            'mobile' => '+31614562609'
        ]);
    }
}
