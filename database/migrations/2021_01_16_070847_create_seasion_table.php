<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seasion', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('part');
            $table->unsignedBigInteger('epision_id');
            $table->timestamps();
            $table->foreign('epision_id')->references('id')->on('epision');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seasion');
    }
}
