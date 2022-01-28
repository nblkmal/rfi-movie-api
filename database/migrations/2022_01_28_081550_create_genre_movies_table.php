<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_movies', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres');

            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');

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
        Schema::dropIfExists('genre_movies');
    }
}
