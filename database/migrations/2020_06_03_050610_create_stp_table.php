<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teknisi');
            $table->string('shift');
            $table->string('spv');
            $table->string('basketscreen');
            $table->string('selektorblower');
            $table->string('statusblower1');
            $table->string('pressureblower1');
            $table->string('statusblower2');
            $table->string('pressureblower2');
            $table->string('kondisiblower1');
            $table->string('kondisiblower2');
            $table->string('selektorequalizing');
            $table->string('statusequalizing1');
            $table->string('statusequalizing2');
            $table->string('levelequalizing');
            $table->string('kondisiequalizing');
            $table->string('selektoreffluent');
            $table->string('statuseffluent1');
            $table->string('statuseffluent2');
            $table->string('leveleffluent');
            $table->string('kondisieffluent');
            $table->string('selektorfilter');
            $table->string('statusfilter1');
            $table->string('statusfilter2');
            $table->string('intakefan');
            $table->string('exhaustfan');
            $table->string('standmeter');
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
        Schema::dropIfExists('stp');
    }
}
