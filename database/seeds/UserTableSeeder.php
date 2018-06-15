<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id' => 1, 'name' => 'Paul Auchon', 'email' => 'paulauchon@gmail.com', 'password' => bcrypt('secret')],
            ['id' => 2, 'name' => 'Joe Bidjoba', 'email' => 'joebidjoba@gmail.com', 'password' => bcrypt('secret')],
            ['id' => 3, 'name' => 'Gina Forka', 'email' => 'ginaforka@gmail.com', 'password' => bcrypt('secret')],
            ['id' => 4, 'name' => 'Lara Pasternak', 'email' => 'larapasternak@gmail.com', 'password' => bcrypt('secret')],
            ['id' => 5, 'name' => 'Joan Baez', 'email' => 'joanbaez@gmail.com', 'password' => bcrypt('secret')],

        ];

        User::insert($users);

    }
}
