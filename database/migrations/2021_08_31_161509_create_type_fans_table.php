<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeFansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_fans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('floor_type_id')->unsigned();
            $table->timestamps();
            $table->foreign('floor_type_id')->references('id')->on('floor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_fans');
    }
}
