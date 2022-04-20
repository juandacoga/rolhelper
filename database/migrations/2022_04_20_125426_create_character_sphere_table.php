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
        Schema::create('character__sphere', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_character')->default(0)->nullable()->comment('id del personaje');
            $table->integer('order')->default(0)->nullable()->comment('Orden');
            $table->integer('space')->default(0)->nullable()->comment('Espacio');
            $table->integer('chaos')->default(0)->nullable()->comment('Caos');
            $table->integer('spirit')->default(0)->nullable()->comment('Espiritu');
            $table->integer('forces')->default(0)->nullable()->comment('Fuerzas');
            $table->integer('matter')->default(0)->nullable()->comment('Materia');
            $table->integer('mind')->default(0)->nullable()->comment('Mente');
            $table->integer('time')->default(0)->nullable()->comment('Tiempo');
            $table->integer('life')->default(0)->nullable()->comment('Vida');
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
        Schema::dropIfExists('character__sphere');
    }
};
