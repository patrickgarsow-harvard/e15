<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('name_suffix');
            $table->string('nickname');
            $table->string('address');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('zipext');
            $table->string('mail_address');
            $table->string('mail_address2');
            $table->string('mail_city');
            $table->string('mail_state');
            $table->string('mail_zip');
            $table->string('mail_zipext');
            $table->string('primary_email')->unique();
            $table->string('alt_email');
            $table->string('cell_phone');
            $table->string('primary_phone');
            $table->string('work_phone');
            $table->string('fax');
            $table->string('website');
            $table->string('twitter_handle');
            $table->string('facebook_handle');
            $table->string('instagram_handle');
            $table->string('linkedin_handle');
            $table->boolean('verified'); //Has contact verified account
            $table->boolean('archived'); //Is contact archived.
            $table->boolean('hidden'); //Should contact be hidden
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
        Schema::dropIfExists('contacts');
    }
}
