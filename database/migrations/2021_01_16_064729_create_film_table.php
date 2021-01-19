<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('des', 30);
            $table->text('content');
            $table->integer('year_release');
            $table->integer('imdb');
            $table->integer('time');
            $table->integer('view')->default(0);
            $table->string('poster');
            $table->string('wallpaper');
            $table->string('link')->nullable();
            $table->string('link_backup')->nullable();
            $table->string('link_youtube')->nullable();
            $table->unsignedBigInteger('dir_id');
            $table->timestamps();
            $table->foreign('dir_id')->references('id')->on('director');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film');
    }
}
