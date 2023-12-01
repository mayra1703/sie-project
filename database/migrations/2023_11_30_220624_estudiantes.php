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
        Schema::create('estudiantes', function (Blueprint $table){

            $table->bigIncrements('id_estudiante');
            $table->string('nombre_estudiante',30);
            $table->string('apeP_estudiante',30);
            $table->string('apeM_estudiante',30)->nullable();
            $table->date('fechaN_estudiante');
            $table->string('direccion_estudiante',255)->nullable();
            $table->integer('tel_estudiante')->nullable();
            $table->string('correo_estudiante',255);
            $table->string('carrera',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
