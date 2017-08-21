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
        // $this->call(UsersTableSeeder::class);
        $this->call(LaratrustSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(HistoriesTableSeeder::class);
    }
}
