<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\location;
class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $organization = factory(\App\Models\Organization::class)->create();

        $locations = factory(\App\Models\Location::class)
        				->create(['organization_id' => $organization->id]);

        $locations->items()->saveMany(factory(\App\Models\Item::class, 2)->make());
    }
}
