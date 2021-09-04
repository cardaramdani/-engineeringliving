<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePowerhousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powerhouse', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teknisi');
            $table->string('shift');
            $table->string('spv');
            $table->string('kwh1');
            $table->string('kwh2');
            $table->string('kva1');
            $table->string('kva2');
            $table->string('kvarh1');
            $table->string('kvarh2');
            $table->string('ampere1r');
            $table->string('ampere2r');
            $table->string('ampere1s');
            $table->string('ampere2s');
            $table->string('ampere1t');
            $table->string('ampere2t');
            $table->string('v1rs');
            $table->string('v2rs');
            $table->string('v1st');
            $table->string('v2st');
            $table->string('v1tr');
            $table->string('v2tr');
            $table->string('v1rn');
            $table->string('v2rn');
            $table->string('v1sn');
            $table->string('v2sn');
            $table->string('v1tn');
            $table->string('v2tn');
            $table->string('freq1');
            $table->string('freq2');
            $table->string('selektor1');
            $table->string('selektor2');
            $table->string('fan1');
            $table->string('fan2');
            $table->string('pf1');
            $table->string('pf2');
            $table->string('cap1');
            $table->string('cap2');
            $table->string('fancap1');
            $table->string('fancap2');
            $table->string('levelolitrafo1');
            $table->string('levelolitrafo2');
            $table->string('tempcap1');
            $table->string('tempcap2');
            $table->string('temptrafo1');
            $table->string('temptrafo2');
            $table->longtext('temuan');
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
        Schema::dropIfExists('powerhouse');
    }
}
