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
        Schema::create('administrativos', function (Blueprint $table){
            $table->engine = 'InnoBD';

            $table->bigIncrements('id_administrador');
            $table->string('nombre_admi',30);
            $table->string('apeP_admi',30);
            $table->string('apeM_admi',30);
            $table->date('fechaN_admi');
            $table->string('direccion_admi',255);
            $table->string('tel_admi')->unsigned();
            $table->string('correo_admi',255);
            $table->string('departamento',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrativos');
    }
};
