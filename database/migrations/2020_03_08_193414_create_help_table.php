<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('help_caption');
            $table->string('help_keywords');
            $table->string('decide_image');
            $table->text('decide_text');
            $table->string('reach_image');
            $table->text('reach_text');
            $table->string('consult_image');
            $table->text('consult_text');
            $table->string('get_service_image');
            $table->text('get_service_text');
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
        Schema::dropIfExists('helps');
    }
}
