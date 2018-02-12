<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Ejecuta las migraciones.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nextel', 20)->after('email');
            $table->string('celular', 10)->after('nextel');
            $table->enum('cargo', [
                'Gerente de Proyecto',
                'Superintendente',
                'Residente', 'Control de Obra',
                'Jefe de Frente',
                'Obra'
            ])->after('celular');
            $table->boolean('bloqueado')->after('cargo');
        });
    }

    /**
     * Revierte las migraciones.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['obras_asignadas', 'nextel', 'celular', 'cargo', 'bloqueado']);
        });
    }
}
