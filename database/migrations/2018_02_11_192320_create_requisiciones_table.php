<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisicionesTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisiciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_formulario', 25);
            $table->string('revision', 10);
            $table->string('fecha_revision', 12);
            $table->date('fecha_solicitud');
            $table->integer('user_id')->unsigned();
            $table->integer('obra_id')->unsigned();
            $table->integer('folio');
            $table->date('fecha_requrida_entrega');
            $table->string('categoria', 50);
            $table->mediumText('observaciones');
            $table->boolean('autorizada');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('obra_id')->references('id')->on('obras');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Revierte las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisiciones');
    }
}
