<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_type', function (Blueprint $table) {
            $table->integer('movie_id')->unsigned();
            $table->foreign('movie_id')
                  ->references('movie_id')
                  ->on('movie')
                  ->onDelete('cascade');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')
                  ->references('type_id')
                  ->on('type')
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
        Schema::dropIfExists('movie_type');
    }
}
