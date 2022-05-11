<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_sponsors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams');
            $table->bigInteger('sponsor_id')->unsigned();
            $table->foreign('sponsor_id')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_sponsors');
    }
}
