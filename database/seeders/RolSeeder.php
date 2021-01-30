<?php



use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::truncate();

        Rol::create([
            'id'=> '1',
            'key' => 'admin',
            'name' => 'admin',
            'description' => 'administrator',
            

        ]);

        Rol::create([
            'id'=> '2',
            'key' => 'regular',
            'name' => 'regular',
            'description' => 'regular user',
        ]);
    }
}
