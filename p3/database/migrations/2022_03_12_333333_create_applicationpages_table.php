<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationpages', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('page_type_id')->unsigned();
            $table->foreign('page_type_id')->references('id')->on('page_types');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->text('short')->nullable();
            $table->text('keywords')->nullable();
            $table->longText('page_content')->nullable();
            $table->bigInteger('gallery_id')->unsigned();
            $table->foreign('gallery_id')->references('id')->on('galleries');
            $table->boolean('published'); //Is the page viewable to public
            $table->boolean('listed'); //Are there menus that link to interface
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('priority')->nullable();
            $table->boolean('highlight')->nullable();
            $table->string('header_image')->nullable();
            $table->date('published_date')->nullable();
            $table->date('file_date')->nullable();
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
        Schema::dropIfExists('applicationpages');
    }
}
