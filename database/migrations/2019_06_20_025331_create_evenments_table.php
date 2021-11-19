<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenments', function (Blueprint $table) {
            $table->increments('id_ev');
            $table->String('P1')->nullable();
            $table->String('P2')->nullable();
            $table->String('P3')->nullable();
            $table->String('P4')->nullable();
            $table->String('P5')->nullable();
            $table->String('P6')->nullable();
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
        Schema::dropIfExists('evenments');
    }
}
