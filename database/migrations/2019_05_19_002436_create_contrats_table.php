<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->bigIncrements('id_contrat');
            $table->String('Title');
            $table->String('Debut');
            $table->String('Fin');
            $table->String('Duree');
            $table->String('Budget');
            $table->String('Commentaire');
            $table->String('fich');
            
            $table->unsignedInteger('id');
            $table->foreign('id')->references('id')->on('clients');
			
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
        Schema::dropIfExists('contrats');
    }
}
