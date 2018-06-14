<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->increments('comic_id');
            $table->string('comic_title', 100);
            $table->string('comic_author', 100);
            $table->string('comic_publisher', 100);
            $table->string('comic_miniature_url', 100);
            $table->boolean('comic_publication');
            $table->unsignedInteger('fk_user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
