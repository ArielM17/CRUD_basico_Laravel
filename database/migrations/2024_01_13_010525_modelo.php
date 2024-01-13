<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Modelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellidos',50);
            $table->string('numero_identidad',9);
            $table->string('estado_civil',1);
            $table->string('sexo',1);
            $table->string('correo',100);
            $table->string('telefono',14);
            $table->string('numero_movil',14);
            $table->date('fecha_nacimiento');
            $table->string('usuario_registro',25);
            $table->string('usuario_modifico',25);
            $table->timestamps();
            $table->boolean('estado_empleado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
    }
}
