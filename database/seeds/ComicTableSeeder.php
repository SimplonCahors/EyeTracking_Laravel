<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $comics = [
            ['comic_id' => 1,'comic_title' => 'Les insectes en BD','comic_author' => 'Cazenove','comic_publisher' => 'Vodarzac & Cosby','comic_miniature_url'  => '','comic_publication' => 1,'fk_user_id' => 1],
            ['comic_id' => 2,'comic_title' => 'Zéphirin le presque justicier','comic_author' => 'Zéphirin & Morice','comic_publisher' => 'Hephez','comic_miniature_url'  => '','comic_publication' => 0,'fk_user_id' => 5],
            ['comic_id' => 3,'comic_title' => 'Dans la combi de Thomas Pesquet','comic_author' => 'Marion Montaigne','comic_publisher' => 'Dargaud','comic_miniature_url'  => '','comic_publication' => 1,'fk_user_id' => 3],
            ['comic_id' => 4,'comic_title' => 'l\'homme brouillé','comic_author' => 'Serge Lehman et Frederik Peeters','comic_publisher' => 'Delcourt','comic_miniature_url'  => '','comic_publication' => 0,'fk_user_id' => 3],
            ['comic_id' => 5,'comic_title' => 'la porte au ciel','comic_author' => 'Sicomoro','comic_publisher' => 'Galerie Napoleon','comic_miniature_url'  => '','comic_publication' => 1,'fk_user_id' => 4],
        ];

        Comic::insert($comics);
    }
}
