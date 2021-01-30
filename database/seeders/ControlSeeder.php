<?php



use App\Models\Control;
use Illuminate\Database\Seeder;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Control::truncate();

        for($i=1; $i<=20;$i++){
            $j=$i+1;
            $k=$i+2;
            Control::create([
                'id'=> "$i",
                'invoice'=> "$i",
                'item'=> "$i
                $j
                $k",
                'built'=> "$i",
                'user'=> "$i",
                'description'=> "$i",
                'out'=> "$i",               
            ]);

        }
    }
}
