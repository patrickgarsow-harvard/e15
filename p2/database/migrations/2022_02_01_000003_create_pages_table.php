<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_type_id')->unsigned();
            $table->foreign('page_type_id')->references('id')->on('page_types');
            $table->string('title');
            $table->text('description');
            $table->text('short');
            $table->text('keywords');
            $table->longText('content');
            $table->integer('gallery_id')->unsigned();
            $table->foreign('gallery_id')->references('id')->on('galleries');
            $table->boolean('published'); //Is the page viewable to public
            $table->boolean('listed'); //Are there menus that link to interface
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('priority');
            $table->boolean('highlight');
            $table->string('header_image');
            $table->date('published_date');
            $table->date('file_date');
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
        Schema::dropIfExists('pages');
    }
}
