<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Usuarios', function (Blueprint $table) {
            $table->increments('nombreUsuario')->primary();
            // $table->integer('nombreUsuario')->primary();
            $table->string('nombre', length: 30)->nullable();
            $table->string('apellidoPaterno', length: 30)->nullable();
            $table->string('apellidoMaterno', length: 30);
            $table->string('correoElectronico', length: 30)->nullable();
            $table->string('contraseña', length: 30)->nullable();
            $table->string('rol', length: 30);
        });

        Schema::create('Escaneo', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('direccionIpOrigen', length: 35);
            $table->string('direccionIpDestino', length: 35)->nullable();
            $table->date('fecha')->nullable();
            $table->unsignedInteger('idUsuario');
            $table->foreign('idUsuario')->references('nombreUsuario')->on('Usuarios');
        });

        Schema::create('TipoEscaneo', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nombreEscaneo', length: 30)->nullable();
            $table->string('comando', length: 100);
        });

        Schema::create('UsoEscaneo', function (Blueprint $table) {
            $table->integer('idTipoEscaneo');
            $table->integer('idEscaneo');
            $table->foreign('idTipoEscaneo')->references('id')->on('TipoEscaneo');
            $table->foreign('idEscaneo')->references('id')->on('Escaneo');
        });

        Schema::create('TipoScript', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nombreScript', length: 30)->nullable();
            $table->string('comando', length: 100)->nullable();
        });

        Schema::create('UsoScript', function (Blueprint $table) {
            $table->integer('idEscaneo');
            $table->integer('idTipoScript');
            $table->foreign('idEscaneo')->references('id')->on('Escaneo');
            $table->foreign('idTipoScript')->references('id')->on('TipoScript');
        });

        Schema::create('Reporte', function (Blueprint $table) {
            $table->integer('id');
            $table->string('salidaNmap', length: 1000)->nullable();
            $table->string('estadoPuertos', length: 1000)->nullable();
            $table->string('topologia', length: 1000)->nullable();
            $table->foreign('id')->references('id')->on('Escaneo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Usuarios');
        Schema::dropIfExists('Escaneo');
        Schema::dropIfExists('TipoEscaneo');
        Schema::dropIfExists('UsoEscaneo');
        Schema::dropIfExists('TipoScript');
        Schema::dropIfExists('UsoScritp');
        Schema::dropIfExists('Reporte');
    }
};
