<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::truncate();

        for($i=1; $i<=20;$i++){
            Item::create([
                'id'=> "$i",
                
                'customer_id'=> "$i",
                'location_id'=> "$i",
                'name'=> "$i",
                'code'=> "$i",
                'image'=> "$i",
                'type'=> "$i",
                'detail'=> "$i",
                
            ]);

        }
    }
}
