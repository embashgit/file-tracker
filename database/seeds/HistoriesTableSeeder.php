<?php

use Illuminate\Database\Seeder;

class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $user_dispatcher = factory(\App\Models\User::class)->create();

        $user_reciever = factory(\App\Models\User::class)->create();

        $organization = factory(\App\Models\Organization::class)->create();

        $location_from = factory(\App\Models\Location::class)
        				->create(['organization_id' => $organization->id]);

        $location_to = factory(\App\Models\Location::class)
        				->create(['organization_id' => $organization->id]);
        
        $item = factory(\App\Models\Item::class)
        		->create(['location_id' => $location_from->id]);

        $history = factory(\App\Models\History::class)
        			->create(['from' => $location_from->id, 
        				'to' => $location_to->id, 
        				'item_id' => $item->id,
        				'dispatcher_id' => $user_dispatcher->id,
        				'reciever_id' => $user_reciever->id
        				]);
    }
}
