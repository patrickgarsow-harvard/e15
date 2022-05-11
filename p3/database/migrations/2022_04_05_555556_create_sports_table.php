<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('sport_type_id')->unsigned();
            $table->foreign('sport_type_id')->references('id')->on('sport_types');
            $table->integer('year');
            $table->bigInteger('coach_id')->unsigned();
            $table->foreign('coach_id')->references('id')->on('contacts');
            $table->longText('page_content');
            $table->date('signup_start_date');
            $table->date('signup_end_date');
            $table->date('season_start_date');
            $table->date('season_end_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sports');
    }
}
