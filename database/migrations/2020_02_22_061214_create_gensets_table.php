<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGensetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gensets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teknisi');
            $table->string('shift');
            $table->string('spv');
            $table->string('leveloli');
            $table->string('modemodulpkg');
            $table->string('levelradiator');
            $table->string('odometer');
            $table->string('airfilter');
            $table->string('pompasolar');
            $table->string('valvesolar');
            $table->string('voltageaccu');
            $table->string('voltagecharger');
            $table->string('amf');
            $table->string('emergencybutton');
            $table->string('bodygenset');
            $table->string('catatan');
           
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
        Schema::dropIfExists('gensets');
    }
}
