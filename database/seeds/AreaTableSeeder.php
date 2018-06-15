<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            $areas = [
                ['area_id' => 1, 'area_coord' => , 'area_trigger' => , 'fk_board_id' => , 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['area_id' => 2, 'area_coord' => , 'area_trigger' => , 'fk_board_id' => , 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['area_id' => 3, 'area_coord' => , 'area_trigger' => , 'fk_board_id' => , 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
            ];

        Area::insert($areas);
    }
}
