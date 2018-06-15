<?php

use Illuminate\Database\Seeder;
use App\UserRole;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user_roles = [
            ['fk_role_id' => 1, 'fk_user_id' => 3],
            ['fk_role_id' => 1, 'fk_user_id' => 2],
            ['fk_role_id' => 2, 'fk_user_id' => 5],
            ['fk_role_id' => 2, 'fk_user_id' => 4],
            ['fk_role_id' => 2, 'fk_user_id' => 1],
        ];

        UserRole::insert($user_roles);

    }
}
