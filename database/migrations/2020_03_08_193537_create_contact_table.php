<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('contact_text');
            $table->string('contact_address_short');
            $table->string('contact_address_long');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('contact_fax');
            $table->string('contact_facebook_link');
            $table->string('contact_twitter_link');
            $table->string('contact_instagram_link');
            $table->string('contact_googleplus_link');
            $table->string('contact_linkedin_link');
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
