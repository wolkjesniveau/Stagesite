<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Docent',
            'email' => 'docent@docent.nl',
            'password' => bcrypt('docent'),
            'role_id' => 4,
            'contact_id' => 1
        ]);

        User::create([
            'name' => 'Gebruiker',
            'email' => 'gebruiker@gebruiker.nl',
            'password' => bcrypt('gebruiker'),
            'role_id' => 1,
            'contact_id' => 1
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.nl',
            'password' => bcrypt('admin'),
            'role_id' => 5,
            'contact_id' => 1
        ]);
    }
}
