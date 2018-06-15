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
            AreaTableSeeder::class,
            BoardTableSeeder::class,
            ComicTableSeeder::class,
            MediaTableSeeder::class,
            RoleTableSeeder::class,
            UserRoleTableSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}