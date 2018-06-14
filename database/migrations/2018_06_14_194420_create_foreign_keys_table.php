<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->foreign('fk_user_id')->references('user_id')->on('users');
        });

        Schema::table('areas', function (Blueprint $table) {
            $table->foreign('fk_board_id')->references('board_id')->on('boards');
        });

        Schema::table('medias', function (Blueprint $table) {
            $table->foreign('fk_area_id')->references('area_id')->on('areas');
        });

        Schema::table('boards', function (Blueprint $table) {
            $table->foreign('fk_comic_id')->references('comic_id')->on('comics');
        });

        Schema::table('user_roles', function (Blueprint $table) {
            $table->foreign('fk_role_id')->references('role_id')->on('roles');
            $table->foreign('fk_user_id')->references('user_id')->on('users');
        });
    }
}
