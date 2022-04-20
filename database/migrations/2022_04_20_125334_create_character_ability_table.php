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
        Schema::create('character__ability', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_character')->default(0)->nullable()->comment('id del personaje');
            $table->integer('alert')->default(0)->nullable()->comment('Alerta');
            $table->integer('athletics')->default(0)->nullable()->comment('Atletismo');
            $table->integer('orientation')->default(0)->nullable()->comment('Orientacion');
            $table->integer('conscience')->default(0)->nullable()->comment('Conciencia');
            $table->integer('dodge')->default(0)->nullable()->comment('Esquivar');
            $table->integer('expression')->default(0)->nullable()->comment('Expresion');
            $table->integer('intimidation')->default(0)->nullable()->comment('Intimidacion');
            $table->integer('leadership')->default(0)->nullable()->comment('Liderazgo');
            $table->integer('fight')->default(0)->nullable()->comment('Pelea');
            $table->integer('cheated')->default(0)->nullable()->comment('Engaño');
            $table->integer('melee_weapons')->default(0)->nullable()->comment('Armas melee');
            $table->integer('distance weapons')->default(0)->nullable()->comment('Armas distancia');
            $table->integer('drive')->default(0)->nullable()->comment('Conducir');
            $table->integer('hashtag')->default(0)->nullable()->comment('Etiqueta');
            $table->integer('interpretation')->default(0)->nullable()->comment('Interpretacion');
            $table->integer('meditation')->default(0)->nullable()->comment('Meditacion');
            $table->integer('skills')->default(0)->nullable()->comment('Pericias');
            $table->integer('stealth')->default(0)->nullable()->comment('Sigilo');
            $table->integer('survival')->default(0)->nullable()->comment('Supervivencia');
            $table->integer('technology')->default(0)->nullable()->comment('Tecnologia');
            $table->integer('learning')->default(0)->nullable()->comment('Aprendizaje');
            $table->integer('science')->default(0)->nullable()->comment('Ciencia');
            $table->integer('cosmology')->default(0)->nullable()->comment('Cosmologia');
            $table->integer('riddles')->default(0)->nullable()->comment('Enigmas');
            $table->integer('engineering')->default(0)->nullable()->comment('Ingenieria');
            $table->integer('research')->default(0)->nullable()->comment('Investigacion');
            $table->integer('laws')->default(0)->nullable()->comment('Leyes');
            $table->integer('linguistics')->default(0)->nullable()->comment('Lingüistica');
            $table->integer('medicine')->default(0)->nullable()->comment('Medicina');
            $table->integer('occultism')->default(0)->nullable()->comment('Ocultismo');
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
        Schema::dropIfExists('character__ability');
    }
};
