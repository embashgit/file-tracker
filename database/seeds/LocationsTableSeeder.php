<?php

use Illuminate\Database\Seeder;
use App\Models\Organization;
class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $organizations = factory(\App\Models\Organization::class)->create();

        $organizations->locations()->saveMany(factory(\App\Models\Location::class, 2)->make());
    }
}
