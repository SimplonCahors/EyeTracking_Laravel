<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            RoleTableSeeder::class,
            UserRoleTableSeeder::class,
            // ComicTableSeeder::class,
            // BoardTableSeeder::class,
            // MediaTableSeeder::class,
            // AreaTableSeeder::class,
        ]);
    }
}