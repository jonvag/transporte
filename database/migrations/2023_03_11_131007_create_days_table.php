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
        Schema::create('days', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('passenger_id');
            $table->unsignedBigInteger('ruta_id');


            $table->enum('dom', [1, 2])->default(2); /* 1 activo, 2 inactivo */
            $table->enum('lun', [1, 2])->default(2); /* 1 activo, 2 inactivo */
            $table->enum('mar', [1, 2])->default(2); /* 1 activo, 2 inactivo */
            $table->enum('mie', [1, 2])->default(2); /* 1 activo, 2 inactivo */
            $table->enum('jue', [1, 2])->default(2); /* 1 activo, 2 inactivo */
            $table->enum('vie', [1, 2])->default(2); /* 1 activo, 2 inactivo */
            $table->enum('sab', [1, 2])->default(2); /* 1 activo, 2 inactivo */
            $table->unsignedBigInteger('semana_id');


            $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
            $table->foreign('ruta_id')->references('id')->on('rutas')->onDelete('cascade');
            $table->foreign('semana_id')->references('id')->on('weeks')->onDelete('cascade');


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
        Schema::dropIfExists('days');
    }
};
