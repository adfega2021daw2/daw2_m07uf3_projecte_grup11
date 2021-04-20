<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreantTaulaSocis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socis', function (Blueprint $table) {
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
            $table->date('alta');
            $table->integer('quota');
            $table->integer('aportacions');
            $table->integer('anual');
            $table->string('nom_ong');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socis');
    }
}
