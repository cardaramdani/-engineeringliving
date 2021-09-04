<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKwhcomersileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kwhcomersile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Unit');
            $table->string('teknisi');
            $table->string('NoSeri');
            $table->string('Daya');
            $table->string('Faktor_kali');
            $table->string('StandAwal_lwbp');
            $table->string('StandAkhir_lwbp');
            $table->string('StandAwal_wbp');
            $table->string('StandAkhir_wbp');
            $table->string('total');
            $table->string('GambarAwal_lwbp');
            $table->string('GambarAkhir_lwbp');
            $table->string('GambarAwal_wbp');
            $table->string('GambarAkhir_wbp');
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
        Schema::dropIfExists('kwhcomersile');
    }
}
