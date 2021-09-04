<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSumpitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sumpits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teknisi');
            $table->string('shift');
            $table->char('spv');
            $table->char('powerpit1');
            $table->char('powerpit2');
            $table->char('powerpit3');
            $table->char('powerpit4');
            $table->char('powerpit5');
            $table->char('powerpit6');
            $table->char('powerpit7');
            $table->char('powerpit8');
            $table->char('powerpit9');
            $table->char('powerpit10');
            $table->char('selektorpit1');
            $table->char('selektorpit2');
            $table->char('selektorpit3');
            $table->char('selektorpit4');
            $table->char('selektorpit5');
            $table->char('selektorpit6');
            $table->char('selektorpit7');
            $table->char('selektorpit8');
            $table->char('selektorpit9');
            $table->char('selektorpit10');
            $table->char('wlcpit1');
            $table->char('wlcpit2');
            $table->char('wlcpit3');
            $table->char('wlcpit4');
            $table->char('wlcpit5');
            $table->char('wlcpit6');
            $table->char('wlcpit7');
            $table->char('wlcpit8');
            $table->char('wlcpit9');
            $table->char('wlcpit10');
            $table->char('kondisipit1');
            $table->char('kondisipit2');
            $table->char('kondisipit3');
            $table->char('kondisipit4');
            $table->char('kondisipit5');
            $table->char('kondisipit6');
            $table->char('kondisipit7');
            $table->char('kondisipit8');
            $table->char('kondisipit9');
            $table->char('kondisipit10');
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
        Schema::dropIfExists('sumpits');
    }
}
