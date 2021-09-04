<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferpumpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_transferpumps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('valve_tfa');
            $table->char('status_tfa');
            $table->char('valve_tfb');
            $table->char('status_tfb');
            $table->char('valve_tfc');
            $table->char('status_tfc');
            $table->char('valve_tfd');
            $table->char('status_tfd');
            $table->char('kondisi');
            $table->char('teknisi');
            $table->char('shift');
            $table->char('spv');
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
        Schema::dropIfExists('_transferpumps');
    }
}
