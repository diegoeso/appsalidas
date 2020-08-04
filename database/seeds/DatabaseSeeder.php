<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FacultiesTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(Document_typeTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(Role_UserSeed::class);
    }
}
