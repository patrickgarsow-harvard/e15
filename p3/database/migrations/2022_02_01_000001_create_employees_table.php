<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('contact_id')->unsigned();
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->string('title')->nullable();;
            $table->string('reference_id')->nullable();;
            $table->boolean('active')->nullable();;
            $table->boolean('retired')->nullable();;
            $table->date('started')->nullable();;
            $table->date('terminated')->nullable();;
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
        Schema::dropIfExists('employees');
    }
}
