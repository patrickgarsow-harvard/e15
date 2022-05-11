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
            $table->id();
            $table->string('company')->nullable();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('name_suffix')->nullable();
            $table->string('nickname')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('zipext')->nullable();
            $table->string('mail_address')->nullable();
            $table->string('mail_address2')->nullable();
            $table->string('mail_city')->nullable();
            $table->string('mail_state')->nullable();
            $table->string('mail_zip')->nullable();
            $table->string('mail_zipext')->nullable();
            $table->string('primary_email')->unique();
            $table->string('alt_email')->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('primary_phone')->nullable();
            $table->string('work_phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('website')->nullable();
            $table->string('twitter_handle')->nullable();
            $table->string('facebook_handle')->nullable();
            $table->string('instagram_handle')->nullable();
            $table->string('linkedin_handle')->nullable();
            $table->boolean('verified')->nullable(); //Has contact verified account
            $table->boolean('archived')->nullable(); //Is contact archived.
            $table->boolean('hidden')->nullable(); //Should contact be hidden
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
