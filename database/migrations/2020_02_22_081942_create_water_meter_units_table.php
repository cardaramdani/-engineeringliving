<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterMeterUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_meter_units', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Unit')->uniqid();
            $table->string('NoSeri')->uniqid();
            $table->string('teknisi');
            $table->integer('StandAwal');
            $table->integer('StandAkhir');
            $table->integer('TotalPakai');
            $table->string('GambarAwal');
            $table->string('GambarAkhir');
            $table->date('TanggalBAST');
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
        Schema::dropIfExists('water_meter_units');
    }
}
