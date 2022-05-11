<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('version')->nullable();
            $table->datetime('upload_datetime');
            $table->string('filename');
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('path')->nullable();
            $table->bigInteger('upload_category_id')->unsigned()->nullable();
            $table->foreign('upload_category_id')->references('id')->on('upload_categories');
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
        Schema::dropIfExists('uploads');
    }
}
