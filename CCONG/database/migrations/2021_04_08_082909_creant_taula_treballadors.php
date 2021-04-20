<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreantTaulaTreballadors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treballadors', function (Blueprint $table) {
            $table->id();
            $table->string('nif');
            $table->string('noms');
            $table->string('cognoms');
            $table->string('adressa');
            $table->string('poblacio');
            $table->string('comarca');
            $table->integer('telefon');
            $table->integer('movil');
            $table->string('email');        
            $table->date('ingres');  
            $table->boolean('tipus');        
            $table->string('carrec')->nullable();        
            $table->integer('sou')->nullable();        
            $table->double('seg_social')->nullable();        
            $table->double('irpf')->nullable();        
            $table->integer('edat')->nullable();        
            $table->string('profesio')->nullable();   
            $table->integer('hores')->nullable();        
            $table->string('nom_ong')->nullable();        
     
      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treballadors');
    }
}
