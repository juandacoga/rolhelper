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
        Schema::create('character__statistics', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_character')->default(0)->nullable()->comment('id del personaje');

            $table->integer('honor')->default(0)->nullable()->comment('Honor');
            $table->integer('will_power')->default(0)->nullable()->comment('Fuerza de voluntad');
            $table->integer('sanity')->default(0)->nullable()->comment('Cordura');
            $table->integer('bestiality')->default(0)->nullable()->comment('Bestialidad');

            $table->integer('health_condition')->default(0)->nullable()->comment('Estado de salud(0 - Nada; 1 - magullado; 2 - lastimado; 3 - lesionado; 4 - herido; 5 - malherido; 6 - tullido; 7 - incapacitado)');

            $table->integer('overall_health')->default(0)->nullable()->comment('Salud total');
            $table->integer('current_health')->default(0)->nullable()->comment('Salud actual');
            $table->double('health_regeneration')->default(0)->nullable()->comment('Regeneracion de salud');
            $table->integer('physical_strength')->default(0)->nullable()->comment('Fuerza fisica');
            $table->integer('acceleration')->default(0)->nullable()->comment('aceleracion');
            $table->integer('reaction_speed')->default(0)->nullable()->comment('Velocidad de reaccion');
            $table->double('movement_speed')->default(0)->nullable()->comment('Velocidad de movimiento');

            $table->integer('level')->default(0)->nullable()->comment('Nivel');
            $table->double('level_progress')->default(0)->nullable()->comment('Progreso de nivel');
            $table->bigInteger('experience')->default(0)->nullable()->comment('experiencia');

            $table->integer('dynamic_resonance')->default(0)->nullable()->comment('Resonacia dinamica');
            $table->integer('chaotic_resonance')->default(0)->nullable()->comment('Resonacia caotica');
            $table->integer('static_resonance')->default(0)->nullable()->comment('Resonacia estatica');

            $table->integer('mental_resistance')->default(0)->nullable()->comment('Resistencia mental');
            $table->integer('magic_resistance')->default(0)->nullable()->comment('Resistencia magica');
            $table->integer('spiritual_resistance')->default(0)->nullable()->comment('Resistencia espiritual');
            $table->integer('physical_resistance')->default(0)->nullable()->comment('Resistencia fisica');

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
        Schema::dropIfExists('character__statistics');
    }
};
