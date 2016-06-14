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
            'role_id' => 1,
            'contact_id' => 1
        ]);

        \App\User::create([
            'name' => 'test',
            'email' => 'test@test.nl',
            'password' => bcrypt('test'),
            'role_id' => 5,
            'contact_id' => 1
        ]);
    }
}
