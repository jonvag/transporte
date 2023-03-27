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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('telefono');

            $table->unsignedBigInteger('recogida_id');
            $table->unsignedBigInteger('llegada_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('recogida_id')->references('id')->on('recogidas');
            $table->foreign('llegada_id')->references('id')->on('llegadas');
            $table->foreign('user_id')->references('id')->on('users');
            /* $table->foreign('ruta_id')->references('id')->on('rutas'); */

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
        Schema::dropIfExists('passengers');
    }
};
