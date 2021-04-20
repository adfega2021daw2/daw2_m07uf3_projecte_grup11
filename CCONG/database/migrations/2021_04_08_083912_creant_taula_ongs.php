<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreantTaulaOngs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ongs', function (Blueprint $table) {
            $table->id();
            $table->string('cif');
            $table->string('nom');
            $table->string('adressa');
            $table->string('poblacio');
            $table->string('comarca');
            $table->string('tipus');
            $table->boolean('utilitat_publica');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ongs');
    }
}
