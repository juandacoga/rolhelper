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
        Schema::create('character__magical_power', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_character')->default(0)->nullable()->comment('id del personaje');

            $table->integer('type')->default(0)->nullable()->comment('tipo poder magico: 0 - mana; 1 - chakra; 2 - shinsoo');
            $table->integer('type_shinsoo')->default(0)->nullable()->comment('tipo poder shinsoo: 0 - No aplica; 1 - shinro; 2 - kuro');
            $table->integer('power')->default(0)->nullable()->comment('Cantidad de poder magico');
            $table->double('magical_regeneration')->default(0)->nullable()->comment('Regeneracion de poder magico');

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
        Schema::dropIfExists('character__magical_power');
    }
};
