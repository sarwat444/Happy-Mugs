<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('model_images', function (Blueprint $table) {
              $table->id();
              $table->string('image');
              $table->Integer('motive_id');
              $table->tinyInteger('animal')->default("0");
              //$table->string('gender')->default("1");
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
        Schema::dropIfExists('model_images');
    }
}
