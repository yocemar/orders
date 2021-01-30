<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'id'=> '1',
            'name' => 'Danilo',
            'rol_id' => '1',
            'email' => 'danilo@mail.com',
            'password' => '$2y$10$1GCA7cjaMovdMH53mBzfauEfomuN5886kLfiXBvujA9fsqlyqI8Ii',

        ]);
        for($i=2; $i<=10;$i++){
            User::create([
                'id'=> "$i",
                'name' => "usuario$i",
                'rol_id' => '2',
                'email' => "usuario$i@mail.com",
                'password' => '$2y$10$1GCA7cjaMovdMH53mBzfauEfomuN5886kLfiXBvujA9fsqlyqI8Ii',
            ]);
        }
    
    }
}
