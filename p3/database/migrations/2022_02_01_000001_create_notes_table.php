<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('contact_id')->unsigned();
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('note_categories');
            $table->text('note');
            $table->date('published_date');
            $table->time('published_time');
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
        Schema::dropIfExists('notes');
    }
}
