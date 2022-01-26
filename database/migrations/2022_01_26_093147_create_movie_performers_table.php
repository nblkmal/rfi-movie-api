<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviePerformersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_performers', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('performer_id');
            $table->foreign('performer_id')->references('id')->on('performers');

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
        Schema::dropIfExists('movie_performers');
    }
}
