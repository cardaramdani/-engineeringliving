<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirepumpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_firepumps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teknisi');
            $table->string('shift');
            $table->string('spv');
            $table->string('statusjockey');
            $table->string('selectorjockey');
            $table->string('valvejockey');
            $table->string('onpressurejockey');
            $table->string('ofpressurejockey');
            $table->string('bodyjockey');
            $table->string('statuselectric');
            $table->string('selectorelectric');
            $table->string('valveelectric');
            $table->string('onpressureelectric');
            $table->string('ofpressureelectric');
            $table->string('bodyelectric');
            $table->string('statusdiesel');
            $table->string('selectordiesel');
            $table->string('valvediesel');
            $table->string('onpressurediesel');
            $table->string('ofpressurediesel');
            $table->string('batterycharger');
            $table->string('leveloli');
            $table->string('levelsolar');
            $table->string('levelradiator');
            $table->string('aktualpressureheader');
            $table->string('temuan');
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
        Schema::dropIfExists('_firepumps');
    }
}
