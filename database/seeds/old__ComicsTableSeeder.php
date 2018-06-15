<?php

use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        return [
        
            $comics = [
                ['comic_id' => 1,'comic_title' => 'Dans la combi de Thomas Pesquet','comic_author' => 'Marion Montaigne','comic_publisher' => 'Dargaud','comic_miniature_url'  => 'tmp/tp.jpg','comic_publication' => 1,'fk_user_id' => 1],
    
                ['comic_id' => 2,'comic_title' => 'l\'homme brouillé','comic_author' => 'Serge Lehman et Frederik Peeters','comic_publisher' => 'Delcourt','comic_miniature_url'  => 'tmp/hb.jpg','comic_publication' => 0,'fk_user_id' => 1],
    
                ['comic_id' => 2,'comic_title' => 'la porte au ciel','comic_author' => 'Sicomoro','comic_publisher' => 'Galerie Napoleon','comic_miniature_url'  => 'tmp/pc.jpg','comic_publication' => 1,'fk_user_id' => 1],
            ],
    
            Comic::insert($comics)
        ];
        // factory(App\Comic::class)->create();
    }
}
