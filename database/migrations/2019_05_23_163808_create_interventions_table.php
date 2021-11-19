<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id_inter');
            $table->String('Titre');
            $table->String('dateD');
            $table->String('dateF');
            $table->String('dateR');
            $table->String('Color');
            $table->boolean('Etat');
            $table->String('Commentaire');
            
           

            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('clients');

            $table->unsignedInteger('id_emp');
            $table->foreign('id_emp')->references('id_emp')->on('employers');
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
        Schema::dropIfExists('interventions');
    }
}
