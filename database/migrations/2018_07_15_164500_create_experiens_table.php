<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('job');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('description')->nullable();
            $table->unsignedInteger('user');
            $table->foreign('user')->references('id')->on('users');
            $table->boolean('active');
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
        Schema::dropIfExists('experiens');
    }
}
