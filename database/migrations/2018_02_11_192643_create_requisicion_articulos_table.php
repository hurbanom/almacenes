<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisicionArticulosTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisicion_articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requisicion_id')->unsigned();
            $table->integer('numero_partida');
            $table->string('familia', 50);
            $table->mediumText('descripcion');
            $table->mediumText('nota');
            $table->string('unidad', 50);
            $table->float('cantidad', 8, 2);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('requisicion_id')->references('id')->on('requisiciones')
                    ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Revierte las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requisicion_articulos');
    }
}
