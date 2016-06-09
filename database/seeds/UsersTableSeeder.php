<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Henk vd Berg',
            'email' => 'HenkvdBerg@onzin.nl',
            'password' => bcrypt('password'),
            'role_id' => 1
        ]);
    }
}
