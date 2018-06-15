<?php

use Illuminate\Database\Seeder;
use App\Board;

class BoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $boards = [
                ['board_id' => 1, 'board_image' => '', 'board_number' => 1, 'fk_comic_id' => 3, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 2, 'board_image' => '', 'board_number' => 2, 'fk_comic_id' => 3, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 3, 'board_image' => '', 'board_number' => 3, 'fk_comic_id' => 3, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 4, 'board_image' => '', 'board_number' => 4, 'fk_comic_id' => 3, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 5, 'board_image' => '', 'board_number' => 5, 'fk_comic_id' => 3, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 6, 'board_image' => '', 'board_number' => 6, 'fk_comic_id' => 3, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 7, 'board_image' => '', 'board_number' => 7, 'fk_comic_id' => 3, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 8, 'board_image' => '', 'board_number' => 1, 'fk_comic_id' => 4, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 9, 'board_image' => '', 'board_number' => 2, 'fk_comic_id' => 4, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 10, 'board_image' => '', 'board_number' => 3, 'fk_comic_id' => 4, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 11, 'board_image' => '', 'board_number' => 4, 'fk_comic_id' => 4, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 12, 'board_image' => '', 'board_number' => 5, 'fk_comic_id' => 4, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 13, 'board_image' => '', 'board_number' => 1, 'fk_comic_id' => 5, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 14, 'board_image' => '', 'board_number' => 2, 'fk_comic_id' => 5, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 15, 'board_image' => '', 'board_number' => 3, 'fk_comic_id' => 5, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 16, 'board_image' => '', 'board_number' => 4, 'fk_comic_id' => 5, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 17, 'board_image' => '', 'board_number' => 5, 'fk_comic_id' => 5, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 18, 'board_image' => '', 'board_number' => 1, 'fk_comic_id' => 1, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 19, 'board_image' => '', 'board_number' => 2, 'fk_comic_id' => 1, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 20, 'board_image' => '', 'board_number' => 1, 'fk_comic_id' => 2, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 21, 'board_image' => '', 'board_number' => 2, 'fk_comic_id' => 2, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 22, 'board_image' => '', 'board_number' => 3, 'fk_comic_id' => 2, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
                ['board_id' => 23, 'board_image' => '', 'board_number' => 4, 'fk_comic_id' => 2, 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
            ];

        Board::insert($boards);

    }
}
