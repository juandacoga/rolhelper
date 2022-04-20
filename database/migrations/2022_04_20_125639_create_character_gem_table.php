<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('character__gem', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_character')->default(0)->nullable()->comment('id del personaje');

            $table->integer('type')->default(0)->nullable()->comment('0 - Invocacion;1 - blanca; 2 - blanca/naranja; 3 - naranja; 4 - naranja/verde; 5 - verde; 6 - verde/negra; 7 - negra; 8 - negra/granate; 9 - granate; 10 - granate/azul; 11 - azul; 12 - azul/blanca');
            $table->integer('state')->default(0)->nullable()->comment('0 - bloqueado; 1 - desbloqueado');
            $table->integer('level')->default(0)->nullable()->comment('nivel de la gema');
            $table->string('gem')->nullable()->comment('gema que contiene');
            $table->string('descrip')->nullable()->comment('Efecto de la gema');

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
        Schema::dropIfExists('character__gem');
    }
};
