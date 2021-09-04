<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoosterpumpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boosterpump', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('teknisi');
            $table->char('shift');
            $table->char('spv');
            $table->char('valvehisappompa1');
            $table->char('valvesuplypompa1');
            $table->char('selektorpompa1');
            $table->char('valvehisappompa2');
            $table->char('valvesuplypompa2');
            $table->char('selektorpompa2');
            $table->char('kondisi');
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
        Schema::dropIfExists('boosterpump');
    }
}
