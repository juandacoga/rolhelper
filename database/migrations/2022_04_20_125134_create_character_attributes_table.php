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
        Schema::create('character__attributes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_character')->default(0)->nullable()->comment('id del personaje');
            $table->integer('force')->default(0)->nullable()->comment('Fuerza');
            $table->integer('dexterity')->default(0)->nullable()->comment('Destreza');
            $table->integer('resistance')->default(0)->nullable()->comment('Resistencia');
            $table->integer('charisma')->default(0)->nullable()->comment('Carisma');
            $table->integer('handling')->default(0)->nullable()->comment('Manipulacion');
            $table->integer('appearance')->default(0)->nullable()->comment('Apariencia');
            $table->integer('perception')->default(0)->nullable()->comment('Percepcion');
            $table->integer('intelligence')->default(0)->nullable()->comment('Inteligencia');
            $table->integer('cunning')->default(0)->nullable()->comment('Astucia');
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
        Schema::dropIfExists('character__attributes');
    }
};
