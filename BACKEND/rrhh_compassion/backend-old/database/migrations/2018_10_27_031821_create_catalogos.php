<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario');
            $table->string('observaciones');
            $table->timestamps();
        });

        Schema::create('tc_departamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departamento');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('tc_usuario');
            $table->string('observaciones');
            $table->timestamps();
        });

        Schema::create('tc_puesto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('puesto');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('tc_usuario');
            $table->string('observaciones');
            $table->timestamps();
        });
        Schema::create('tc_departamento_pais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('departamento_pais');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('tc_usuario');
            $table->string('observaciones');
            $table->timestamps();
        });
        Schema::create('tc_municipio_departamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('municipio_departamento');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('tc_usuario');
            $table->string('observaciones');
            $table->timestamps();
        });

        /*Schema::create('tc_empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empleado');
            $table->date('fecha_vencimiento');
            $table->date('fecha_ingreso_compassion');
            $table->string('genero');
            $table->string('telefono');
            $table->string('correo_electronico');
            $table->string('direccion');
            $table->string('profesion');
            $table->string('Estado Civil');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('tc_usuario');
            $table->unsignedInteger('id_departamento_nacimiento');
            $table->foreign('id_departamento_nacimiento')->references('id')->on('tc_departamento_pais');
            $table->unsignedInteger('id_municipio_nacimiento');
            $table->foreign('id_municipio_nacimiento')->references('id')->on('tc_municipio_departamento');

            $table->string('observaciones');
            $table->timestamps();
        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tc_usuario');
        Schema::dropIfExists('tc_departamento');
        Schema::dropIfExists('tc_puesto');
        Schema::dropIfExists('tc_departamento_pais');
        Schema::dropIfExists('tc_municipio_departamento');
    }
}
