<?php

use Illuminate\Database\Seeder;
use App\Media;


class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $medias = [
            ['media_id' => 1, 'media_type' => 'image', 'media_filename' => 'truc1', 'media_path' => '/storage/medias/truc.ext', 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
            ['media_id' => 2, 'media_type' => 'image', 'media_filename' => 'truc2', 'media_path' => '/storage/medias/truc.ext', 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
            ['media_id' => 3, 'media_type' => 'son', 'media_filename' => 'truc3', 'media_path' => '/storage/medias/truc.ext', 'created_at' => date('Y-m-d H:i:s'),  'updated_at' => date('Y-m-d H:i:s')],
        ];

        Media::insert($medias);

    }
}
