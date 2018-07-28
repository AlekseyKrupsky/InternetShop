<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableGoodPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_photo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('good_id',false,true);
            $table->foreign('good_id')->references('id')->on('goods')->onDelete('cascade');
            $table->integer('photo_id',false,true);
            $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');
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
        Schema::dropIfExists('good_photo');
    }
}
