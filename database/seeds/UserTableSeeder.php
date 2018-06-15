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
            ['id' => 1, 'name' => 'Paul Auchon', 'email' => 'paulauchon@gmail.com', 'password' => bcrypt('secret'), 'remember_token' => NULL, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 2, 'name' => 'Joe Bidjoba', 'email' => 'joebidjoba@gmail.com', 'password' => bcrypt('secret'), 'remember_token' => NULL, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 3, 'name' => 'Gina Forka', 'email' => 'ginaforka@gmail.com', 'password' => bcrypt('secret'), 'remember_token' => NULL, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 4, 'name' => 'Lara Pasternak', 'email' => 'larapasternak@gmail.com', 'password' => bcrypt('secret'), 'remember_token' => NULL, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
            ['id' => 5, 'name' => 'Joan Baez', 'email' => 'joanbaez@gmail.com', 'password' => bcrypt('secret'), 'remember_token' => NULL, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
        ];

        User::insert($users);
    }
}