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
      Schema::create('notes__manager', function (Blueprint $table) {
        $table->id();
        $table->bigInteger('id_user')->default(0)->nullable()->comment('id de usuario');
        $table->string('title')->nullable()->comment('Titulo');
        $table->text('description')->nullable()->comment('Descripcion');
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
        Schema::dropIfExists('notes__manager');
    }
};
