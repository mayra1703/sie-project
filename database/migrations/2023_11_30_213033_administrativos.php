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
            
            $table->bigIncrements('id_administrador');
            $table->string('nombre_admi', 30);
            $table->string('apeP_admi', 30);
            $table->string('apeM_admi', 30)->nullable();
            $table->date('fechaN_admi');
            $table->string('direccion_admi', 255)->nullable();
            $table->integer('tel_admi')->unique();
            $table->string('correo_admi', 255);
            $table->string('departamento', 50)->nullable();
            
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
