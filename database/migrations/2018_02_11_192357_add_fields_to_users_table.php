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
            $table->string('nextel', 20)->nullable()->after('email');
            $table->string('celular', 10)->nullable()->after('nextel');
            $table->boolean('bloqueado')->nullable()->after('celular')->default(1);
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
            $table->dropColumn(['nextel', 'celular', 'bloqueado']);
        });
    }
}
