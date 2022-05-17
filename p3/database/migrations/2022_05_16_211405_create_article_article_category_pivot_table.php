<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticleArticleCategoryPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_article_category', function (Blueprint $table) {
            //$table->unsignedBigInteger('article_id')->index();
            $table->foreignID('article_id')->constrained();
            $table->foreignID('article_category_id')->constrained();
            //$table->unsignedBigInteger('article_category_id')->index();
            //$table->foreign('article_category_id')->references('id')->on('articles');
            $table->primary(['article_category_id','article_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_article_category');
    }
}
