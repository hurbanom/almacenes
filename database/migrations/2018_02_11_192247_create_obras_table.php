<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_obra', 255);
            $table->string('nombre_obra', 60);
            $table->date('fecha_inicio');
            $table->date('fecha_cierre');
            $table->string('calle', 60);
            $table->string('numero_exterior', 5);
            $table->string('numero_interior', 5);
            $table->string('colonia', 50);
            $table->string('estado', 50);
            $table->string('delegacion_municipio', 50);
            $table->string('codigo_postal', 5);
            $table->mediumText('referencias');
            $table->string('nombre_cliente', 30);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Revierte las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obras');
    }
}
