<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SchoolsTableSeeder::class);
        $this->call(SchoolLocationsTableSeeder::class);
        $this->call(CrebosTableSeeder::class);
        $this->call(CohortsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StudiesTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(ToolsTableSeeder::class);
        $this->call(InternshipTableSeeder::class);
/*        $this->call(InternshipUsersTableSeeder::class);*/
        $this->call(UsersTableSeeder::class);
    }
}
