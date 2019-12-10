<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('asd123'),
            'telefon' => '064 234 234',
            'role' => 'admin'
        ]);
        $user->save();


        $users = factory(App\User::class, 10)->create();
    }
}
