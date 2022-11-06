<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->integer('vote_count');
            $table->id();
            $table->boolean('video')->default(false);
            $table->double('vote_average', 8, 2);
            $table->string('title');
            $table->double('popularity', 15, 8);
            $table->string('poster_path');
            $table->string('original_language');
            $table->string('original_title');
            $table->json('genre_ids');
            $table->boolean('adult')->default(false);
            $table->text('overview');
            $table->date('release_date');
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
        Schema::dropIfExists('movies');
    }
}
