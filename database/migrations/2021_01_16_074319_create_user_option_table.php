<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_option', function (Blueprint $table) {
            $table->id();
            // $table->timestamps();
            $table->dateTime('day_start');
            $table->dateTime('day_end');

            $table->unsignedBigInteger('option_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('option_id')->references('id')->on('option');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_option');
    }
}
