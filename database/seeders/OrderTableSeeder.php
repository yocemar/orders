<?php

use App\Order;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();

        for($i=1; $i<=22;$i++){
            Order::create([
                'id'=> "$i",
                'user_id'=> "$i",
                'customer_id'=> "$i",
                'detail_id'=> "$i",
                'number'=> "$i",
                'shipment'=> "$i",
                'type'=> "$i",
                'value'=> "$i",
                'invoice'=> "$i",
            ]);

        }

    }
}
