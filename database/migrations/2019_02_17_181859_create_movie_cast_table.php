<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieCastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_cast', function (Blueprint $table) {
            $table->integer('actor_id')->unsigned();
            $table->foreign('actor_id')
                  ->references('actor_id')
                  ->on('actor')
                  ->onDelete('cascade');
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')
                  ->references('movie_id')
                  ->on('movie')
                  ->onDelete('cascade');
            $table->string('role', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_cast');
    }
}
