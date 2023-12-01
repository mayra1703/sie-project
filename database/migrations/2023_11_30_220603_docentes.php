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
        Schema::create('docentes', function (Blueprint $table){
            $table->engine = 'InnoBD';

            $table->bigIncrements('id_docente');
            $table->string('nombre_docente',30);
            $table->string('apeP_docente',30);
            $table->string('apeM_docente',30);
            $table->date('fechaN_docente');
            $table->string('direccion_docente',255);
            $table->string('tel_docente')->unsigned();
            $table->string('correo_docente',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
};
