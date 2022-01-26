<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director_movies', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');

            $table->unsignedInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directors');

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
        Schema::dropIfExists('director_movies');
    }
}
