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
        Schema::create('character__manager', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_user')->default(0)->nullable()->comment('id de usuario');
            $table->string('name')->nullable()->comment('Nombre del personaje');
            $table->string('player')->nullable()->comment('Nombre del jugador');
            $table->string('nature')->nullable()->comment('Naturaleza del personaje');
            $table->string('essence')->nullable()->comment('Escencia del personaje');
            $table->string('conduct')->nullable()->comment('Conducta del personaje');
            $table->string('tradition')->nullable()->comment('Tradición del personaje');
            $table->string('concept')->nullable()->comment('Concepto del personaje');
            $table->string('alignment')->nullable()->comment('Alineamiento del personaje');

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
        Schema::dropIfExists('character__manager');
    }
};
