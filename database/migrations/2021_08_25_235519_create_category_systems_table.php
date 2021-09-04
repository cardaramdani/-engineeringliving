<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_systems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('wo_category_id')->unsigned();
            $table->timestamps();
            $table->foreign('wo_category_id')->references('id')->on('category_wos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_systems');
    }
}
