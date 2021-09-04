<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_amrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shift');
            $table->string('teknisi');
            $table->integer('cosp');
            $table->integer('lwbp');
            $table->integer('wbp');
            $table->integer('total');
            $table->integer('kvarh');
            $table->integer('penalty');
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
        Schema::dropIfExists('_amrs');
    }
}
