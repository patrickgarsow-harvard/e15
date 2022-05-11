<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GalleryPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_photo', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gallery_id')->unsigned();
            $table->foreign('gallery_id')->references('id')->on('galleries');
            $table->bigInteger('photo_id')->unsigned();
            $table->foreign('photo_id')->references('id')->on('photos');
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
        Schema::dropIfExists('gallery_photo');
    }
}
