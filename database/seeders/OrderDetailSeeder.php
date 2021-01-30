<?php


use App\Order_detail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order_detail::truncate();

        for($i=1; $i<=20;$i++){
            Order_detail::create([
                'id'=> "$i",
                'item_id'=> "$i",
                'order_id'=> "$i",
                'quantity'=> "$i",
                'lot'=> "$i",
                'note'=> "$i",               
            ]);
        }
    }
}
