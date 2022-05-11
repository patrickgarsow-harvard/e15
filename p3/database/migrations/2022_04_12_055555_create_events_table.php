<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->datetime('start_datetime');
            $table->datetime('end_datetime')->nullable();
            $table->bigInteger('gallery_id')->unsigned();
            $table->foreign('gallery_id')->references('id')->on('galleries');
            $table->longText('page_content')->nullable();
            $table->bigInteger('event_category_id')->unsigned()->nullable();
            $table->foreign('event_category_id')->references('id')->on('event_categories');
            $table->bigInteger('page_id')->nullable();
            $table->boolean('hidden')->nullable();
            $table->boolean('listed')->nullable();
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
        Schema::dropIfExists('events');
    }
}
