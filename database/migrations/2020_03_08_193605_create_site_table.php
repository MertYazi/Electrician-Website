<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_name');
            $table->string('site_year');
            $table->text('description');
            $table->string('references_cover');
            $table->string('about_cover');
            $table->string('contact_cover');
            $table->string('services_cover');
            $table->string('references_caption');
            $table->string('about_caption');
            $table->string('contact_caption');
            $table->string('services_caption');
            $table->string('team_caption');
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
        Schema::dropIfExists('site');
    }
}
