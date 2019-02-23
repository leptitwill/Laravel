<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieDirectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_direction', function (Blueprint $table) {
            $table->integer('director_id')->unsigned();
            $table->foreign('director_id')
                  ->references('director_id')
                  ->on('director')
                  ->onDelete('cascade');
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')
                  ->references('movie_id')
                  ->on('movie')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_direction');
    }
}
