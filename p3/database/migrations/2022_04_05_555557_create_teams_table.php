<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->bigInteger('sport_id')->unsigned();
            $table->foreign('sport_id')->references('id')->on('sports');
            $table->bigInteger('coach_id')->unsigned();
            $table->foreign('coach_id')->references('id')->on('contacts');
            $table->bigInteger('captain_id')->unsigned();
            $table->foreign('captain_id')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
