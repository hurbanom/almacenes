<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsCargoToUsuarioObraTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obra_user', function (Blueprint $table) {
            $table->string('cargo_id')->nullable()->after('obra_id');
            $table->string('cargo', 50)->nullable()->after('cargo_id');
        });
    }

    /**
     * Revierte las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obra_user', function (Blueprint $table) {
            $table->dropColumn(['cargo_id', 'cargo']);
        });
    }
}
